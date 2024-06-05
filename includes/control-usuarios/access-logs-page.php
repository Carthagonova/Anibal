<?php

function ual_access_logs_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'user_access_logs';
    $failed_table_name = $wpdb->prefix . 'failed_login_attempts';

    if (isset($_POST['block_ip'])) {
        $blocked_ip = sanitize_text_field($_POST['block_ip']);
        if (!empty($blocked_ip)) {
            $blocked_ips = get_option('blocked_ips', []);
            if (!in_array($blocked_ip, $blocked_ips)) {
                $blocked_ips[] = $blocked_ip;
                update_option('blocked_ips', $blocked_ips);
                echo '<div class="updated"><p>IP ' . esc_html($blocked_ip) . ' bloqueada.</p></div>';
            }
        }
    }

    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY access_time DESC");

    echo '<div class="wrap">';
    echo '<h1>Access Logs</h1>';
    echo '<table class="widefat fixed">';
    echo '<thead><tr><th>ID</th><th>Username</th><th>User IP</th><th>Access Time</th></tr></thead>';
    echo '<tbody>';
    if (!empty($results)) {
        foreach ($results as $row) {
            echo '<tr>';
            echo '<td>' . esc_html($row->id) . '</td>';
            echo '<td>' . esc_html($row->username) . '</td>';
            echo '<td>' . esc_html($row->user_ip) . '</td>';
            echo '<td>' . esc_html($row->access_time) . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="4">No hay accesos registrados.</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';

    $active_users = get_users();
    $current_time = current_time('timestamp');
    $online_threshold = 15 * 60;

    echo '<h2>Active Users</h2>';
    echo '<table class="widefat fixed">';
    echo '<thead><tr><th>Username</th><th>Email</th><th>Role</th><th>Status</th></tr></thead>';
    echo '<tbody>';
    foreach ($active_users as $user) {
        $last_activity = get_user_meta($user->ID, 'last_activity', true);
        $last_activity = is_numeric($last_activity) ? (int) $last_activity : 0;
        $is_online = ($current_time - $last_activity) < $online_threshold;
        echo '<tr>';
        echo '<td>' . esc_html($user->user_login) . '</td>';
        echo '<td>' . esc_html($user->user_email) . '</td>';
        echo '<td>' . esc_html(implode(', ', $user->roles)) . '</td>';
        echo '<td>' . ($is_online ? '<button style="background-color: green; color: white;">Online</button>' : 'Offline') . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';

    echo '<h2>IPs por Usuario</h2>';
    $unique_ips_per_user_week = $wpdb->get_results("
        SELECT username, COUNT(DISTINCT user_ip) as unique_ips
        FROM $table_name
        WHERE access_time >= DATE_SUB(NOW(), INTERVAL 1 WEEK)
        GROUP BY username
    ");
    echo '<h3>Última semana</h3>';
    echo '<table class="widefat fixed">';
    echo '<thead><tr><th>Username</th><th>Unique IPs</th></tr></thead>';
    echo '<tbody>';
    if (!empty($unique_ips_per_user_week)) {
        foreach ($unique_ips_per_user_week as $row) {
            echo '<tr>';
            echo '<td>' . esc_html($row->username) . '</td>';
            echo '<td>' . esc_html($row->unique_ips) . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="2">No hay datos.</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';

    $unique_ips_per_user_month = $wpdb->get_results("
        SELECT username, COUNT(DISTINCT user_ip) as unique_ips
        FROM $table_name
        WHERE access_time >= DATE_SUB(NOW(), INTERVAL 1 MONTH)
        GROUP BY username
    ");
    echo '<h3>Último mes</h3>';
    echo '<table class="widefat fixed">';
    echo '<thead><tr><th>Username</th><th>Unique IPs</th></tr></thead>';
    echo '<tbody>';
    if (!empty($unique_ips_per_user_month)) {
        foreach ($unique_ips_per_user_month as $row) {
            echo '<tr>';
            echo '<td>' . esc_html($row->username) . '</td>';
            echo '<td>' . esc_html($row->unique_ips) . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="2">No hay datos.</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';

    $unique_ips_per_user_year = $wpdb->get_results("
        SELECT username, COUNT(DISTINCT user_ip) as unique_ips
        FROM $table_name
        WHERE access_time >= DATE_SUB(NOW(), INTERVAL 1 YEAR)
        GROUP BY username
    ");
    echo '<h3>Último año</h3>';
    echo '<table class="widefat fixed">';
    echo '<thead><tr><th>Username</th><th>Unique IPs</th></tr></thead>';
    echo '<tbody>';
    if (!empty($unique_ips_per_user_year)) {
        foreach ($unique_ips_per_user_year as $row) {
            echo '<tr>';
            echo '<td>' . esc_html($row->username) . '</td>';
            echo '<td>' . esc_html($row->unique_ips) . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="2">No hay datos.</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';

    echo '<h2>Intentos de Inicio de Sesión Fallidos</h2>';
    $failed_attempts = $wpdb->get_results("SELECT * FROM $failed_table_name ORDER BY attempt_time DESC");

    echo '<table class="widefat fixed">';
    echo '<thead><tr><th>ID</th><th>Username</th><th>User IP</th><th>Attempt Time</th></tr></thead>';
    echo '<tbody>';
    if (!empty($failed_attempts)) {
        foreach ($failed_attempts as $attempt) {
            echo '<tr>';
            echo '<td>' . esc_html($attempt->id) . '</td>';
            echo '<td>' . esc_html($attempt->username) . '</td>';
            echo '<td>' . esc_html($attempt->user_ip) . '</td>';
            echo '<td>' . esc_html($attempt->attempt_time) . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="4">No hay intentos fallidos registrados.</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';

    echo '<h2>IPs Bloqueadas</h2>';
    $blocked_ips = get_option('blocked_ips', []);

    echo '<table class="widefat fixed">';
    echo '<thead><tr><th>IP</th></tr></thead>';
    echo '<tbody>';
    if (!empty($blocked_ips)) {
        foreach ($blocked_ips as $ip) {
            echo '<tr>';
            echo '<td>' . esc_html($ip) . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td>No hay IPs bloqueadas.</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';

    echo '<h2>Bloquear IP</h2>';
    echo '<form method="post">';
    echo '<input type="text" name="block_ip" placeholder="IP a bloquear" required>';
    echo '<input type="submit" value="Bloquear IP" class="button button-primary">';
    echo '</form>';
    echo '</div>';
}
?>
