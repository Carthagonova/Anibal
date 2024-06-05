<?php

function ual_user_changes_logs_page() {
    global $wpdb;
    $user_changes_table_name = $wpdb->prefix . 'user_changes_logs';

    $user_changes = $wpdb->get_results("SELECT * FROM $user_changes_table_name ORDER BY change_time DESC");

    echo '<div class="wrap">';
    echo '<h1>User Changes Logs</h1>';
    echo '<table class="widefat fixed">';
    echo '<thead><tr><th>ID</th><th>Username</th><th>Change Type</th><th>Change Field</th><th>Old Value</th><th>New Value</th><th>Change Time</th></tr></thead>';
    echo '<tbody>';
    if (!empty($user_changes)) {
        foreach ($user_changes as $change) {
            echo '<tr>';
            echo '<td>' . esc_html($change->id) . '</td>';
            echo '<td>' . esc_html($change->username) . '</td>';
            echo '<td>' . esc_html($change->change_type) . '</td>';
            echo '<td>' . esc_html($change->change_field) . '</td>';
            echo '<td>' . esc_html($change->old_value) . '</td>';
            echo '<td>' . esc_html($change->new_value) . '</td>';
            echo '<td>' . esc_html($change->change_time) . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="7">No hay cambios de usuarios registrados.</td></tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}
?>
