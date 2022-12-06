<?php
// Con esto las comillas bien
remove_filter('the_content', 'wptexturize');

// Con esta función añadimos el 'styleselect' al array de botones mostrados
function custom_mce_buttons_2( $buttons ) {
 array_unshift( $buttons, 'styleselect' );
 return $buttons;
}
add_filter('mce_buttons_2', 'custom_mce_buttons_2');
function my_mce_before_init_insert_formats( $init_array ) {
	// Definir estilos en el array
$style_formats = array(
		// Cara Array por estilo y clase
	array(
			'title' => 'Subscript (Subíndice)',  // Título
			'inline' => 'sub',  // Elemento
		),
	array(
			'title' => 'Superscript (Superíndice)',  // Título
			'inline' => 'sup',  // Elemento
		),
		array(
			'title' => 'Legend (Leyenda)',  // Título
			'block' => 'div',  // Elemento
				//'wrapper' => true, //englobar todo
			'classes' => 'leyenda',  // Clase
		),
    array(
			'title' => 'Bibliography (Bibliografía)',  // Título
			'inline' => 'span',  // Elemento
			'classes' => 'bibliography',  // Clase
		),
		    array(
			'title' => 'Columns (Columnas)',  // Título
			'block' => 'div',  // Elemento
				'wrapper' => true, //englobar todo
			'classes' => 'columnas',  // Clase
		),
	    array(
			'title' => 'Left column (Columna izquierda)',  // Título
			'block' => 'div',  // Elemento
			'wrapper' => true,
			'classes' => 'columnaizq',  // Clase
		),
	    array(
			'title' => 'Right column (Columna derecha)',  // Título
			'block' => 'div',  // Elemento
			'wrapper' => true,
			'classes' => 'columnader',  // Clase
		),
    array(
      'title' => 'Codigo',  // Título
      'block' => 'code',  // Elemento
        //'wrapper' => true, //englobar todo
      'classes' => 'codigo-post',  // Clase
    ),
	);
	$init_array['style_formats'] = json_encode( $style_formats );
	return $init_array;
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );



// Do NOT include the opening php tag above
add_filter('tiny_mce_before_init', 'tiny_mce_remove_unused_formats' );
/*
 * Modify TinyMCE editor to remove H1.
 */
function tiny_mce_remove_unused_formats($init) {
	// Add block format elements you want to show in dropdown
	$init['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;Address=address;Pre=pre';
	return $init;
}

//Eliminar párrafos automáticos por defecto

//remove_filter('the_content', 'wpautop');


/**
 * Registers an editor stylesheet for the current theme.
 */
function wpdocs_theme_add_editor_styles() {
    $font_url = str_replace( ',', '%2C', '/editor-style.css' );
    add_editor_style( $font_url );
}
add_action( 'after_setup_theme', 'wpdocs_theme_add_editor_styles' );
//Evitar creación de copias de imágenes
function ayudawp_quita_copias_imagenes( $sizes) {
        unset( $sizes['thumbnail']);
        unset( $sizes['medium']);
        unset( $sizes['large']);
        return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'ayudawp_quita_copias_imagenes');
add_filter( 'amp_post_template_data', function( $data ) {
	$data['featured_image'] = false;
	return $data;
} );


// Si se necesitan varios autores en un post

if ( function_exists( 'coauthors_posts_links' ) ) {
    coauthors_posts_links();
} else {
    the_author_posts_link();
}

 ?>
