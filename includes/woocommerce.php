<?php
// Deshabilitar estilos woocommerce
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_filter( 'woocommerce_enqueue_styles', '__return_false' );
 ?>
