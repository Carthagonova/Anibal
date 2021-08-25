<?php
//Games
 function lc_create_post_type() {
 // set up labels
 $labels = array (
 'name' => 'Games',
 'singular_name' => 'Game',
 'add_new' => 'Add New Game',
 'add_new_item' => 'Add New Game',
 'edit_item' => 'Edit Game',
 'new_item' => 'New Game',
 'all_items' => 'All Games',
 'view_item' => 'View Game',
 'search_items' => 'Search Games',
 'not_found' => 'No Games Found',
 'not_found_in_trash' => 'No Games found in Trash',
 'parent_item_colon' => '',
 'menu_name' => 'Games',
 );
 //register post type
 register_post_type ( 'game', array(
 'labels' => $labels,
 'has_archive' => true,
 'public' => true,
 'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
 'taxonomies' => array( 'post_tag', 'category' ),
 'exclude_from_search' => false,
 'capability_type' => 'post',
//'posts_per_page' => -1,
 'rewrite' => array( 'slug' => 'games' ),
 // David garphql
  'show_in_rest'	 => true,
 'show_in_graphql' => true,
     'hierarchical' => true,
     'graphql_single_name' => 'game',
     'graphql_plural_name' => 'games',
 )
 );
 }
 add_action( 'init', 'lc_create_post_type' );


//PARTICULAR PARA HTV
/*
add_action( 'init', function() {
   register_post_type( 'games', [
      'show_ui' => true,
      'labels'  => [
        //@see https://developer.wordpress.org/themes/functionality/internationalization/
      	'menu_name' => __( 'Games', "your-text-domain" ),
      ],
      'show_in_graphql' => true,
      'hierarchical' => true,
      'graphql_single_name' => 'game',
      'graphql_plural_name' => 'games',
   ] );
} );*/
 ?>
