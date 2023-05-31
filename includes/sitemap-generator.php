<?php
/*
*
* Template Name: sitemapgenerator
*
*/
define("pagina","sitemapgenerator");
$current_pagina = 'sitemapgenerator';
$banneranuncio = "banneranuncio";
$navbar = "";

$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http' . '://';
$rutita = $current_url="//".$_SERVER['HTTP_HOST'];
$canonical = get_field( 'canonical' );

// Se puede mejorar código porque en condicional es: SI es esto o esto tal, sino nada. Y repito código de forma ineficiente
?><x-layout>
<section>
  <div style="height:44px;"> </div>

  <?php

// Blog

echo "<h2>Blog</h2>";
$domblog = new DOMDocument('1.0','UTF-8');
$domblog->formatOutput = true;
$domblog->preserveWhiteSpace = false;
$domblog->formatOutput = true;
$xslt = $domblog->createProcessingInstruction('xml-stylesheet', 'type="text/xsl" href="' . plugin_dir_url( __DIR__ ) . 'css/sitemap/stylesheet.xsl"');
$domblog->appendChild($xslt);
$rootblog = $domblog->createElement('urlset');
$domblog->appendChild($rootblog);
$rootblog->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
//$resultblog->setAttribute('id', 1);
$argsblog = array(
  'posts_per_page' => -1,
  //'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
  'post_type' => 'post',
  'orderby' => 'date',
  'order'   => 'DESC',
'post_status' => 'publish',
);
$obtencionblog = new WP_Query( $argsblog );
if ($obtencionblog->have_posts()) {
  while ($obtencionblog->have_posts()) {
      $obtencionblog->the_post();
      
      if (!get_field("canonical")) {
          $metarobots_checked_values = get_field('metarobots');
          if ($metarobots_checked_values && in_array('all', $metarobots_checked_values) || in_array('index', $metarobots_checked_values)) {
              $enlace = get_permalink();
              $lastestmod = get_the_modified_date('Y-m-d');
              $resultblog = $domblog->createElement('url');
              $rootblog->appendChild($resultblog);
              $resultblog->appendChild($domblog->createElement('loc', $enlace));
              $resultblog->appendChild($domblog->createElement('lastmod', $lastestmod));
          }
      }
  }
  wp_reset_postdata();
}


  echo '<code class="codigo-post"><xmp>'. $domblog->saveXML() .'</xmp></code>';
  echo  '<a class="exitbutton" href="' . $rutita . '/sitemap-posts.xml" target="_blank">Comprobar Sitemap</a>';
$domblog->save('sitemap-posts.xml') or die('XML Create Error');


  ?>
  <div style="height:88px;"> </div>

  <?php
  echo "<hr><h2>Páginas</h2>";
  $dom = new DOMDocument('1.0','UTF-8');
  $dom->formatOutput = true;

  $dom->preserveWhiteSpace = false;
  $dom->formatOutput = true;
  $xslt = $dom->createProcessingInstruction('xml-stylesheet', 'type="text/xsl" href="' . plugin_dir_url( __DIR__ ) . 'css/sitemap/stylesheet.xsl"');
  $dom->appendChild($xslt);

/*
  $stylesheet = $dom->createElement('xml-stylesheet');
  $dom->appendChild($stylesheet);
  $stylesheet ->setAttribute('href', 'wp-content/themes/sanchezdonate/core/css/stylesheet.xsl');
  $dom->appendChild($stylesheet);
  $stylesheet ->setAttribute('type', 'text/xsl');*/

  $root = $dom->createElement('urlset');
  $dom->appendChild($root);
  $root->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
  //$result->setAttribute('id', 1);
  $args = array(
    'posts_per_page' => -1,
    //'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
    'post_type' => 'page',
    'orderby' => 'date',
    'order'   => 'DESC',
  'post_status' => 'publish',
  );
  $obtencion = new WP_Query( $args );
  if ( $obtencion-> have_posts() ) : ?>
  <?php while ( $obtencion->have_posts() ) : $obtencion->the_post();

if ( ! get_field( "canonical" ))
{  $metarobots_checked_values = get_field( 'metarobots' );
 if ((( $metarobots_checked_values && in_array('all', $metarobots_checked_values) ) || ( $metarobots_checked_values && in_array('index', $metarobots_checked_values) )) && (!$canonical)) {
  $enlace = get_permalink();
  $lastestmod = get_the_modified_date('Y-m-d');
    $result = $dom->createElement('url');
    $root->appendChild($result);
    $result->appendChild( $dom->createElement('loc', $enlace) );
    $result->appendChild( $dom->createElement('lastmod', $lastestmod) );}
     else{;}
}else{;}

 endwhile;
 endif; wp_reset_postdata();

  echo '<div class="codigo-post"><xmp>'. $dom->saveXML() .'</xmp></div>';
  echo  '<a class="exitbutton" href="' . $rutita . '/sitemap-principal.xml" target="_blank">Comprobar Sitemap</a>';
$dom->save('sitemap-principal.xml') or die('XML Create Error');
?>

<div style="height:88px;"> </div>

<?php
// categoria
echo "<hr><h2>Categoria</h2>";
$domcategoria = new DOMDocument('1.0','UTF-8');
$domcategoria->formatOutput = true;
$domcategoria->preserveWhiteSpace = false;
$domcategoria->formatOutput = true;
$xslt = $domcategoria->createProcessingInstruction('xml-stylesheet', 'type="text/xsl" href="https://carlos.sanchezdonate.com/wp-content/themes/sanchezdonate/core/css/stylesheet.xsl"');
$domcategoria->appendChild($xslt);
$rootcategoria = $domcategoria->createElement('urlset');
$domcategoria->appendChild($rootcategoria);
$rootcategoria->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
//$resultcategoria->setAttribute('id', 1);


$argscategoria = get_categories( array(
  'orderby' => 'count',
      'order'   => 'DESC',
  ) );
  $term    = get_queried_object();
  $term_id = ( isset( $term->term_id ) ) ? (int) $term->term_id : 0;
  $categories = get_categories($argscategoria);
  foreach($categories as $category)
  {

// $obtencioncategoria = new WP_Query( $argscategoria );

/* $metarobots_checked_values = get_field( 'metarobots', 'category_'.$category->term_id);
if ( $metarobots_checked_values && in_array('all', $metarobots_checked_values) ) {*/
  $enlace = get_category_link($category->term_id);
  $lastestmod = get_the_modified_date('Y-m-d');
  $resultcategoria = $domcategoria->createElement('url');
  $rootcategoria->appendChild($resultcategoria);
  $resultcategoria->appendChild( $domcategoria->createElement('loc', $enlace) );
  $resultcategoria->appendChild( $domcategoria->createElement('lastmod', $lastestmod) );
/*}
elseif( $metarobots_checked_values && in_array('index', $metarobots_checked_values) ) {
  $enlace = get_category_link($category->term_id);
  $lastestmod = get_the_modified_date('Y-m-d');
  $resultcategoria = $domcategoria->createElement('url');
  $rootcategoria->appendChild($resultcategoria);
  $resultcategoria->appendChild( $domcategoria->createElement('loc', $enlace) );
  $resultcategoria->appendChild( $domcategoria->createElement('lastmod', $lastestmod) );
} else{;}*/
}


 wp_reset_postdata();

  echo '<div class="codigo-post"><xmp>'. $domcategoria->saveXML() .'</xmp></div>';
  echo  '<a class="exitbutton" href="' . $rutita . '/sitemap-categorias.xml" target="_blank">Comprobar Sitemap</a>';
$domcategoria->save('sitemap-categorias.xml') or die('XML Create Error');



?>




</section>
<style>
.site-footer {
    display: none;
}
.codigo-post {
    background: var(--light-grey);
    padding: 8px;
    cursor: text;
    font-size: 16px;
    display: inline-block;
    overflow-x: scroll;
    display: block;
    max-width: 100%;
    min-width: 100px;
    background-color: #0c1021;
    color: white;
    padding: 40px 16px 16px;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='54' height='14' viewBox='0 0 54 14'%3E%3Cg fill='none' fill-rule='evenodd' transform='translate(1 1)'%3E%3Ccircle cx='6' cy='6' r='6' fill='%23FF5F56' stroke='%23E0443E' stroke-width='.5'%3E%3C/circle%3E%3Ccircle cx='26' cy='6' r='6' fill='%23FFBD2E' stroke='%23DEA123' stroke-width='.5'%3E%3C/circle%3E%3Ccircle cx='46' cy='6' r='6' fill='%2327C93F' stroke='%231AAB29' stroke-width='.5'%3E%3C/circle%3E%3C/g%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: 16px 8px;
    font-family: monospace;
    background-attachment: local;
}
.codigo-post pre {
    margin: none;
}
a.exitbutton {
    background: #8d096b;
    color: #faf7fb;
    text-decoration: inherit;
    font-size: 22px;
    margin: auto;
    display: flex;
    width: fit-content;
    padding: 16px;
    font-weight: 700;
    margin-top: 16px;
}
h2 {
    color: #8d096b;
    font-size: 40px;
}
</style>
</x-layout>




<?php get_footer(); ?>
