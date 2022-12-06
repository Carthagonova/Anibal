<?php
//ejemplos
 function lc_create_post_type() {
 // set up labels
 $labels = array (
 'name' => 'ejemplos',
 'singular_name' => 'ejemplo',
 'add_new' => 'Añadir ejemplo',
 'add_new_item' => 'Añadir nuevo ejemplo',
 'edit_item' => 'Editar ejemplo',
 'new_item' => 'Nuevo ejemplo',
 'all_items' => 'Todos los ejemplos',
 'view_item' => 'Ver ejemplo',
 'search_items' => 'Buscar ejemplos',
 'not_found' => 'ejemplo no encontrado',
 'not_found_in_trash' => 'ejemplo no encontrado en Papelera',
 'parent_item_colon' => '',
 'menu_name' => 'Ejemplos',
 );
 //register post type
 register_post_type ( 'ejemplo', array(
 'labels' => $labels,
 'has_archive' => true,
 'public' => true,
 'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
 'taxonomies' => array( 'post_tag', 'categore' ),
 'exclude_from_search' => false,
 'capability_type' => 'post',
//'posts_per_page' => -1,
 'rewrite' => array( 'slug' => 'ejemplo' ),
 // David garphql
  'show_in_rest'	 => true,
 'show_in_graphql' => true,
     'hierarchical' => true,
     'graphql_single_name' => 'ejemplo',
     'graphql_plural_name' => 'ejemplo',
 )
 );
 }
 add_action( 'init', 'lc_create_post_type' );


 function lc_create_post_type_2() {
 // set up labels
 $labels = array (
 'name' => 'Empresas',
 'singular_name' => 'Empresa',
 'add_new' => 'Añadir Empresa',
 'add_new_item' => 'Añadir nueva Empresa',
 'edit_item' => 'Editar Empresa',
 'new_item' => 'Nuevo Empresa',
 'all_items' => 'Todas las Empresas',
 'view_item' => 'Ver Empresa',
 'search_items' => 'Buscar Empresas',
 'not_found' => 'Empresa no encontrado',
 'not_found_in_trash' => 'Empresa no encontrada en Papelera',
 'parent_item_colon' => '',
 'menu_name' => 'Empresas',
 );
 //register post type
 register_post_type ( 'Empresa', array(
 'labels' => $labels,
 'has_archive' => false,
 'public' => true,
 'supports' => array( 'title','custom-fields'),
 'exclude_from_search' => true,
 'capability_type' => 'post',
//'posts_per_page' => -1,
 'rewrite' => array( 'slug' => 'empresa' ),
 // David garphql
/*  'show_in_rest'	 => true,
 'show_in_graphql' => true,
     'hierarchical' => true,
     'graphql_single_name' => 'Empresa',
     'graphql_plural_name' => 'Empresa',*/
 )
 );
 }
 add_action( 'init', 'lc_create_post_type_2' );




 function lc_create_post_type_3() {
 // set up labels
 $labels = array (
 'name' => 'Noticias',
 'singular_name' => 'Noticia',
 'add_new' => 'Añadir Noticia',
 'add_new_item' => 'Añadir nueva Noticia',
 'edit_item' => 'Editar Noticia',
 'new_item' => 'Nueva Noticia',
 'all_items' => 'Todas las Noticias',
 'view_item' => 'Ver Noticia',
 'search_items' => 'Buscar Noticias',
 'not_found' => 'Noticia no encontrada',
 'not_found_in_trash' => 'Noticia no encontrada en Papelera',
 'parent_item_colon' => '',
 'menu_name' => 'Noticias',
 );
 //register post type
 register_post_type ( 'Noticia', array(
 'labels' => $labels,
 'has_archive' => true,
 'public' => true,
 'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail','page-attributes' ),
 'taxonomies' => array( 'post_tag', 'categore' ),
 'exclude_from_search' => false,
 'capability_type' => 'post',
//'posts_per_page' => -1,
 'rewrite' => array( 'slug' => 'noticia' ),
 // David garphql
  'show_in_rest'	 => true,
 'show_in_graphql' => true,
     'hierarchical' => true,
     'graphql_single_name' => 'Noticia',
     'graphql_plural_name' => 'Noticia',
 )
 );
 }
 add_action( 'init', 'lc_create_post_type_3' );


 function lc_create_post_type_4() {
 // set up labels
 $labels = array (
 'name' => 'Tecnologias',
 'singular_name' => 'Tecnologia',
 'add_new' => 'Añadir Tecnologia',
 'add_new_item' => 'Añadir nueva Tecnologia',
 'edit_item' => 'Editar Tecnologia',
 'new_item' => 'Nueva Tecnologiaa',
 'all_items' => 'Todas las Tecnologias',
 'view_item' => 'Ver Tecnologia',
 'search_items' => 'Buscar Tecnologias',
 'not_found' => 'Tecnologia no encontrada',
 'not_found_in_trash' => 'Tecnologia no encontrada en Papelera',
 'parent_item_colon' => '',
 'menu_name' => 'Tecnologias',
 );
 //register post type
 register_post_type ( 'Tecnologia', array(
 'labels' => $labels,
 'has_archive' => true,
 'public' => true,
 'supports' => array( 'title','custom-fields', 'thumbnail','page-attributes' ),
 'taxonomies' => array( 'post_tag', 'categore' ),
 'exclude_from_search' => false,
 'capability_type' => 'post',
//'posts_per_page' => -1,
 'rewrite' => array( 'slug' => 'tecnologia' ),
 // David garphql
  'show_in_rest'	 => true,
 'show_in_graphql' => true,
     'hierarchical' => true,
     'graphql_single_name' => 'Tecnologia',
     'graphql_plural_name' => 'Tecnologia',
 )
 );
 }
 add_action( 'init', 'lc_create_post_type_4' );


 function lc_create_post_type_5() {
 // set up labels
 $labels = array (
 'name' => 'Curiosidades',
 'singular_name' => 'Curiosidad',
 'add_new' => 'Añadir Curiosidad',
 'add_new_item' => 'Añadir nueva Curiosidad',
 'edit_item' => 'Editar Curiosidad',
 'new_item' => 'Nueva Curiosidad',
 'all_items' => 'Todas las Curiosidades',
 'view_item' => 'Ver Curiosidad',
 'search_items' => 'Buscar Curiosidades',
 'not_found' => 'Curiosidad no encontrada',
 'not_found_in_trash' => 'Curiosidad no encontrada en Papelera',
 'parent_item_colon' => '',
 'menu_name' => 'Curiosidades',
 );
 //register post type
 register_post_type ( 'curiosidades', array(
 'labels' => $labels,
 'has_archive' => true,
 'public' => true,
 'supports' => array( 'title', 'editor', 'custom-fields','page-attributes' ),
 'taxonomies' => array( 'post_tag', 'categore' ),
 'exclude_from_search' => false,
 'capability_type' => 'post',
 'publicly_queryable ' => 'true',
//'posts_per_page' => -1,
 'rewrite' => array( 'slug' => 'curiosidades' ),
 // David garphql
  'show_in_rest'	 => true,
 'show_in_graphql' => true,
     'hierarchical' => true,
     'graphql_single_name' => 'Curiosidades',
     'graphql_plural_name' => 'Curiosidades',
 )
 );
 }
 add_action( 'init', 'lc_create_post_type_5' );



 function lc_create_post_type_6() {
 // set up labels
 $labels = array (
 'name' => 'Servicios',
 'singular_name' => 'Servicio',
 'add_new' => 'Añadir servicio',
 'add_new_item' => 'Añadir nueva servicio',
 'edit_item' => 'Editar servicio',
 'new_item' => 'Nuevo servicio',
 'all_items' => 'Todos los servicios',
 'view_item' => 'Ver servicio',
 'search_items' => 'Buscar servicios',
 'not_found' => 'servicio no encontrado',
 'not_found_in_trash' => 'servicio no encontrada en Papelera',
 'parent_item_colon' => '',
 'menu_name' => 'Servicios',
 );
 //register post type
 register_post_type ( 'servicios', array(
 'labels' => $labels,
 'has_archive' => true,
 'public' => true,
 'supports' => array( 'title', 'editor', 'custom-fields','page-attributes' ),
 'taxonomies' => array( 'post_tag', 'categore' ),
 'exclude_from_search' => false,
 'capability_type' => 'post',
 'publicly_queryable ' => 'true',
//'posts_per_page' => -1,
 'rewrite' => array( 'slug' => 'servicios' ),
 // David garphql
  'show_in_rest'	 => true,
 'show_in_graphql' => true,
     'hierarchical' => true,
     'graphql_single_name' => 'servicios',
     'graphql_plural_name' => 'servicios',
 )
 );
 }
 add_action( 'init', 'lc_create_post_type_6' );
 ?>
