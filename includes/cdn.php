<?php
/*
Cuidado con las metaetiquetas
//Para implementar CDN por ejemplo:
function cdn_for_scripts_and_styles($src) {
    $site_url = get_site_url();
    $cdn_url = 'https://cdn.sanchezdonate.com';

    if (strpos($src, $site_url) !== false) {
        $src = str_replace($site_url, $cdn_url, $src);
    }

    return $src;
}

add_filter('script_loader_src', 'cdn_for_scripts_and_styles', 10, 1);
add_filter('style_loader_src', 'cdn_for_scripts_and_styles', 10, 1);
function cdn_for_media($url) {
    $site_url = get_site_url();
    $cdn_url = 'https://cdn.sanchezdonate.com';

    if (strpos($url, $site_url) !== false) {
        $url = str_replace($site_url, $cdn_url, $url);
    }

    return $url;
}

add_filter('wp_get_attachment_url', 'cdn_for_media', 10, 1);

// Otra forma de hacerlo
function replace_url_with_cdn($buffer) {
    $site_url = get_site_url(); // Obtiene la URL de tu sitio
    $cdn_url = 'https://cdn.sanchezdonate.com'; // URL de tu CDN

    // Reemplaza las URLs de los recursos estáticos por las del CDN
    $buffer = str_replace($site_url, $cdn_url, $buffer);

    return $buffer;
}

function buffer_start() {
    ob_start("replace_url_with_cdn");
}

function buffer_end() {
    ob_end_flush();
}

// Inicia y termina el buffering de salida
add_action('template_redirect', 'buffer_start', -1);
add_action('shutdown', 'buffer_end', -1);
*/
?>