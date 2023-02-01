<?php
function wp_seohead() {
//Esto se llama desde header.php
$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
//$protocol = 'https://';
$url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
$term = get_queried_object();
$marcaweb = 'Mastering Money';

?>
<link rel="alternate" hreflang="<?php echo $lang=get_bloginfo("language"); ?>" href="https:<?php echo $current_url="//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
<link rel="alternate" hreflang="x-default" href="<?php echo $url_sin_string ;/*echo $protocol. $current_url="//".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; */?>" />
<meta name="author" content="<?php echo $marcaweb ;?>">
<link type="text/plain" rel="author" href="<?php echo plugin_dir_url( __DIR__ );?>author/humans.txt" />

<!-- Custom Metatags by Asdrubal SEO SL -->
<title>
<?php if ( get_field( 'title', $term ) ){the_field( 'title', $term );
} else{ wp_title(''); }
 ?>
 - <?php echo $marcaweb ;?>
</title>


<?php the_field( 'custom_meta', $term ); ?>

<?php $metarobots_checked_values = get_field( 'metarobots', $term );
if ( $metarobots_checked_values ) : ?>
<?php // foreach ( $metarobots_checked_values as $metarobots_value ): <?php echo esc_html( $metarobots_value ); ?>
<meta name="robots" content="<?php the_field( 'metarobots', $term )?>"/>
<?php // endforeach; ?>
<?php endif; ?>
<meta property="og:title" content="<?php if ( get_field( 'og_title', $term ) ){the_field( 'og_title', $term );} else{the_field( 'title', $term );}?>"/>
<meta property="twitter:title" content="<?php if ( get_field('twitter_title', $term)){the_field( 'twitter_title', $term );} elseif(get_field( 'og_title', $term)){the_field( 'og_title', $term );} else{the_field( 'title', $term);}?>">

<link rel="canonical" href="<?php if ( get_field( 'canonical', $term ) ){the_field( 'canonical', $term);} else{echo $url_sin_string;}?>"/>
<meta property="og:url" content="<?php if ( get_field( 'canonical', $term ) ){the_field( 'canonical', $term);} else{echo $url_sin_string;}?>"/>
<meta property="twitter:url" content="<?php if ( get_field( 'canonical', $term ) ){the_field( 'canonical', $term);} else{echo $url_sin_string;}?>">

<meta name="description" content="<?php the_field( 'metadescription', $term ); ?>"/>
<meta property="og:description" content="<?php if ( get_field( 'og_description', $term ) ){the_field( 'og_description', $term );} else{the_field( 'metadescription', $term );}?>"/>
<meta property="twitter:description" content="<?php if ( get_field('twitter_description', $term)){the_field( 'twitter_description', $term );} elseif(get_field( 'og_description', $term)){the_field( 'og_description', $term );} else{the_field( 'metadescription', $term );}?>">

<?php /* #Cambio Poner un if con la imagen generica de la web y otro if genérico para el image alt de twitter*/ ?>
<meta property="og:image" content="<?php if ( get_field( 'open_graph', $term ) ){the_field( 'open_graph', $term );} else{echo plugin_dir_url( __DIR__ ) . 'img/og.jpg';}?>"/>
<meta property="og:image:secure_url" content="<?php if ( get_field( 'open_graph', $term ) ){the_field( 'open_graph', $term );} else{echo plugin_dir_url( __DIR__ ) . 'img/og.jpg';}?>"/>
<meta property="og:image:alt" content="<?php if ( get_field( 'og_image_alt', $term ) ){the_field( 'og_image_alt', $term );} else{echo $marcaweb ;}?>"/>
<meta property="twitter:image" content="<?php if ( get_field( 'twitter_card', $term ) ){the_field( 'twitter_card', $term );}elseif(get_field( 'open_graph', $term)){the_field( 'open_graph', $term);}else{echo plugin_dir_url( __DIR__ ) . 'img/og.jpg';}?>">


<meta property="twitter:card" content="summary_large_image">
<meta property="og:type" content="website"/>
<!-- Ajustar a <?php echo $marcaweb ;?> -->
<meta name="twitter:site" content="">
<meta name="twitter:creator" content="">

<?php


}



//do something just on a category archive page }
add_action('wp_head', 'wp_seohead'); //hook que lanza la funcion y carga el contenido en el head







// Cosas SEO del Footer
function wp_seofooter() {

echo '<!-- SEO footertags by Asdrubal SEO SL-->';
the_field( 'custom_meta_footer' );




// Revisar en cada proyecto

if ( is_singular('post') ) {

// Ineficiente. Crearemos una constante en el futuro
// Repetimos la llamada porque está en otra función
  $protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
  $url_sin_string = $protocol . '://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER["REQUEST_URI"], '?');
  $term = get_queried_object();
  $marcaweb = 'Mastering Money';

  ?>
  <script type="application/ld+json">
 {
     "@context": "https://schema.org",
     "@type": "NewsArticle",
     "mainEntityOfPage": {
         "@type": "WebPage",
         "@id": "<?php if ( get_field( 'canonical', $term ) ){the_field( 'canonical', $term);} else{echo $url_sin_string;}?>"
     },
     "headline": "<?php the_title(); ?>",
     "image": [
         "<?php if ( get_field( 'open_graph', $term ) ){the_field( 'open_graph', $term );} else{echo plugin_dir_url( __DIR__ ) . 'img/og.jpg';}?>"
     ],
     "datePublished": "<?php echo get_the_date('c'); ?>",
     "dateModified": "<?php echo get_the_modified_date('c'); ?>",
     "author": {
         "@type": "Organization",
         "name": "<?php if ( get_field( 'author_json' ) ){the_field( 'author_json' );} else{echo "$marcaweb";}?>",
         "url": "<?php if ( get_field( 'url_author_json' ) ){the_field( 'url_author_json' );} else{echo 'https://' . $_SERVER['SERVER_NAME'] ;}?>"
     },
     "description": "<?php the_field("metadescription"); ?>"
 }
 </script>
 <?php
}else {;}




}

add_action('wp_footer', 'wp_seofooter');
?>
