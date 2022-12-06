<?php
// https://joseramonbernabeu.com/solucion/desactivar-sitemap-nativo-wordpress/
add_filter( 'wp_sitemaps_enabled', '__return_false' );
if (has_action('init', 'wp_sitemaps_get_server')){
    remove_action('init', 'wp_sitemaps_get_server');
 }
?>