<?php

//Permitir SVG con movimiento
//insetar svg
// Allow SVG
// rules premisions https://wordpress.stackexchange.com/questions/131814/if-the-current-user-is-an-administrator-or-editor
// if ( 'user_id' == $column_name )

// Descativar escala
add_filter( 'big_image_size_threshold', '__return_false' );
//Maximun size allowed (ese máximo es cortesía de David)
@ini_set( 'upload_max_size' , '1200M' );
@ini_set( 'post_max_size', '1200M');
@ini_set( 'max_execution_time', '300' );

function cc_mime_types($mimes) {
$mimes['svg'] = 'image/svg+xml';
$mimes['psd'] = 'image/vnd.adobe.photoshop'; //Adding photoshop files
// $mimes['pdf'] = 'application/pdf'; //Adding PDF file
$mimes['gif'] = 'image/gif'; //Adding PDF file
$mimes['eps'] = 'application/postscript'; //Adding EPS file
$mimes['ai'] = 'application/postscript'; //Adding AI file
$mimes['avi'] = 'video/avi'; //Adding PDF file
$mimes['zip'] = 'application/zip'; //Adding PDF file
$mimes['otf'] = 'font/opentype'; //Adding PDF file
$mimes['avif'] = 'image/avif'; //Adding avif file
$mimes['jp2'] = 'image/jp2'; //Adding jp2 file
$mimes['webp'] = 'image/webp'; //Adding webp file
return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
define('ALLOW_UNFILTERED_UPLOADS', true);
 ?>
