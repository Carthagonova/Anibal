<?php
//borrar todo el css por defecto

function clear_styles_and_scripts() {
global $wp_scripts;
global $wp_styles;
$styles_to_keep = array("wp-admin", "admin-bar", "dashicons", "open-sans");

foreach( $wp_styles ->queue as $handle ) :
 if ( in_array($handle, $styles_to_keep) ) continue;
  wp_dequeue_style( $handle );
  wp_deregister_style( $handle );

  endforeach;

}
 add_action( 'wp_enqueue_scripts', 'clear_styles_and_scripts', 100 );
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
/* INTENTO ELIMINAR CSS FOR
add_action( 'wp_enqueue_scripts', 'wp_head_acd', 11 );
function wp_head_acd() {
     wp_enqueue_style('sib-front-css');
}*/

 ?>
