<?php
function enqueue_custom_script() {
    wp_enqueue_script(
        'custom-replace-script',
        plugin_dir_url(__FILE__) . 'scripts/del-headers.js', // Ajusta la ruta según tu estructura de archivos
        array(), // Dependencias si es necesario
        '1.0.0',
        true // Cargar en el footer
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');
?>