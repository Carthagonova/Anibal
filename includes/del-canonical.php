<?php //borrar canonical por defecto
remove_action('wp_head', 'rel_canonical');

 /** Remove Canonical URL **/
 remove_action('embed_head', 'rel_canonical');
 add_filter('wpseo_canonical', '__return_false');
  ?>
