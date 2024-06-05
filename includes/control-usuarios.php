<?php

if (!defined('ABSPATH')) {
    exit;
}

// Verificar la existencia de las tablas al cargar el plugin
add_action('plugins_loaded', 'ual_verify_tables');
function ual_verify_tables() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'user_access_logs';
    $failed_table_name = $wpdb->prefix . 'failed_login_attempts';
    $user_changes_table_name = $wpdb->prefix . 'user_changes_logs';

    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        ual_create_access_logs_table();
    }

    if ($wpdb->get_var("SHOW TABLES LIKE '$failed_table_name'") != $failed_table_name) {
        ual_create_failed_login_attempts_table();
    }

    if ($wpdb->get_var("SHOW TABLES LIKE '$user_changes_table_name'") != $user_changes_table_name) {
        ual_create_user_changes_logs_table();
    }
}

// Crear la tabla para almacenar los accesos
function ual_create_access_logs_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'user_access_logs';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        user_id bigint(20) NOT NULL,
        username varchar(60) NOT NULL,
        user_ip varchar(100) NOT NULL,
        access_time datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    if ($wpdb->last_error) {
        error_log('Error en la creación de la tabla de accesos: ' . $wpdb->last_error);
    } else {
        error_log('Tabla de accesos creada correctamente: ' . $table_name);
    }
}

// Crear la tabla para almacenar los intentos fallidos
function ual_create_failed_login_attempts_table() {
    global $wpdb;
    $failed_table_name = $wpdb->prefix . 'failed_login_attempts';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $failed_table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        username varchar(60) NOT NULL,
        user_ip varchar(100) NOT NULL,
        attempt_time datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    if ($wpdb->last_error) {
        error_log('Error en la creación de la tabla de intentos fallidos: ' . $wpdb->last_error);
    } else {
        error_log('Tabla de intentos fallidos creada correctamente: ' . $failed_table_name);
    }
}

// Crear la tabla para almacenar los cambios de usuarios
function ual_create_user_changes_logs_table() {
    global $wpdb;
    $user_changes_table_name = $wpdb->prefix . 'user_changes_logs';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $user_changes_table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        user_id bigint(20) NOT NULL,
        username varchar(60) NOT NULL,
        change_type varchar(60) NOT NULL,
        change_field varchar(60) NOT NULL,
        old_value longtext NOT NULL,
        new_value longtext NOT NULL,
        change_time datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    if ($wpdb->last_error) {
        error_log('Error en la creación de la tabla de cambios de usuarios: ' . $wpdb->last_error);
    } else {
        error_log('Tabla de cambios de usuarios creada correctamente: ' . $user_changes_table_name);
    }
}

// Registrar el acceso del usuario
add_action('wp_login', 'ual_log_user_login', 10, 2);
function ual_log_user_login($user_login, $user) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'user_access_logs';
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $wpdb->insert($table_name, [
        'user_id' => $user->ID,
        'username' => $user_login,
        'user_ip' => $user_ip,
        'access_time' => current_time('mysql')
    ]);

    if ($wpdb->last_error) {
        error_log('Error al registrar el acceso del usuario: ' . $wpdb->last_error);
    } else {
        error_log('Acceso del usuario registrado correctamente: ' . $user_login);
    }

    delete_user_meta($user->ID, 'failed_login_attempts');
}

// Registrar los intentos de inicio de sesión fallidos
add_action('wp_login_failed', 'ual_log_failed_login');
function ual_log_failed_login($username) {
    global $wpdb;
    $failed_table_name = $wpdb->prefix . 'failed_login_attempts';
    $user_ip = $_SERVER['REMOTE_ADDR'];
    $wpdb->insert($failed_table_name, [
        'username' => $username,
        'user_ip' => $user_ip,
        'attempt_time' => current_time('mysql')
    ]);

    $user = get_user_by('login', $username);

    if ($user) {
        $user_id = $user->ID;
        $failed_attempts = get_user_meta($user_id, 'failed_login_attempts', true);
        $failed_attempts = $failed_attempts ? $failed_attempts + 1 : 1;
        update_user_meta($user_id, 'failed_login_attempts', $failed_attempts);

        if ($failed_attempts >= 6) {
            $blocked_ips = get_option('blocked_ips', []);
            if (!in_array($user_ip, $blocked_ips)) {
                $blocked_ips[] = $user_ip;
                update_option('blocked_ips', $blocked_ips);
                error_log('IP bloqueada por demasiados intentos fallidos: ' . $user_ip);
            }
        }
    }
}

// Bloquear IPs al intentar acceder al wp-admin
add_action('init', 'ual_block_ips');
function ual_block_ips() {
    if (is_admin()) {
        $blocked_ips = get_option('blocked_ips', []);
        $user_ip = $_SERVER['REMOTE_ADDR'];
        if (in_array($user_ip, $blocked_ips)) {
            wp_die('Tu IP ha sido bloqueada del acceso al admin.');
        }
    }
}

// Actualizar la última actividad del usuario
add_action('admin_init', 'ual_update_user_activity');
add_action('wp_head', 'ual_update_user_activity');
function ual_update_user_activity() {
    if (is_user_logged_in()) {
        $user_id = get_current_user_id();
        update_user_meta($user_id, 'last_activity', current_time('timestamp'));
    }
}

// Registrar cambios en los perfiles de usuario
add_action('profile_update', 'ual_log_user_changes', 10, 2);
function ual_log_user_changes($user_id, $old_user_data) {
    global $wpdb;
    $user_changes_table_name = $wpdb->prefix . 'user_changes_logs';
    $user = get_userdata($user_id);
    $username = $user->user_login;

    // Comparar datos antiguos con los nuevos y registrar los cambios
    $fields = ['first_name', 'last_name', 'user_email', 'user_url', 'description'];
    foreach ($fields as $field) {
        $old_value = $old_user_data->$field;
        $new_value = $user->$field;
        if ($old_value != $new_value) {
            $wpdb->insert($user_changes_table_name, [
                'user_id' => $user_id,
                'username' => $username,
                'change_type' => 'profile_update',
                'change_field' => $field,
                'old_value' => $old_value,
                'new_value' => $new_value,
                'change_time' => current_time('mysql')
            ]);

            if ($wpdb->last_error) {
                error_log('Error al registrar el cambio de usuario: ' . $wpdb->last_error);
            } else {
                error_log('Cambio de usuario registrado correctamente: ' . $username);
            }
        }
    }
}

// Añadir página de administración
add_action('admin_menu', 'ual_admin_menu');
function ual_admin_menu() {
    add_menu_page('User Access Logs', 'Access Logs', 'manage_options', 'user-access-logs', 'ual_access_logs_page');
    add_submenu_page('user-access-logs', 'User Changes', 'User Changes', 'manage_options', 'user-changes-logs', 'ual_user_changes_logs_page');
}

include_once plugin_dir_path(__FILE__) . 'control-usuarios/access-logs-page.php';
include_once plugin_dir_path(__FILE__) . 'control-usuarios/user-changes-logs-page.php';

// Limpiar los registros de acceso al desactivar el plugin
register_deactivation_hook(__FILE__, 'ual_drop_tables');
function ual_drop_tables() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'user_access_logs';
    $failed_table_name = $wpdb->prefix . 'failed_login_attempts';
    $user_changes_table_name = $wpdb->prefix . 'user_changes_logs';
    $wpdb->query("DROP TABLE IF EXISTS $table_name");
    $wpdb->query("DROP TABLE IF EXISTS $failed_table_name");
    $wpdb->query("DROP TABLE IF EXISTS $user_changes_table_name");
}
?>
