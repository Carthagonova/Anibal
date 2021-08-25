<?php
// register custom post type to work with

//Current user Permisos de usuario
if(!function_exists('wp_get_current_user')) {
    include(ABSPATH . "wp-includes/pluggable.php");
}
$current_user = wp_get_current_user();
$current_user_id = get_current_user_id();

// define( 'ALLOW_UNFILTERED_UPLOADS', true ); ALLOW_UNFILTERED_UPLOADS es una funcion que no está por defecto

// if user role exists

function role_exists( $role ) {

  if( ! empty( $role ) ) {
    return $GLOBALS['wp_roles']->is_role( $role );
  }

  return false;
}

// Crear Rol de Usuario
// AÑADIR FUNCIÓN DE QUE SI EXISTE COPY NO CREAR COPY



if( role_exists( 'Copy' ) ) {;}
else{

add_role(
    'Copy',
    __( 'Copy' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
);
}










/*
SI EL USUARIO ES DE X ROL

https://wordpress.org/support/article/roles-and-capabilities/

$current_user = new WP_User(wp_get_current_user()->id);
$user_roles = $current_user->roles;
foreach ($user_roles as $role) {

   if  ($role == 'subscriber' ){
     //code here for subscribers
   }

   if  ($role == 'editor' ){
     //code here for editors
   }

}

https://developer.wordpress.org/plugins/users/roles-and-capabilities/
*/















/*
$result = add_role(
    'guest_author',
    __( 'Guest Author', 'testdomain' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
);

if ( null !== $result ) {
    echo "Success: {$result->name} user role created.";
}
else {
    echo 'Failure: user role already exists.';
}

*/
/*Ejemplos:

  if(($current_user_id)>=2) { <-- Si eres el usuario X, de esta forma te creas un superadmin

 * Add the duplicate link to action list for post_row_actions

function rd_duplicate_post_link( $actions, $post ) {
  if (current_user_can('edit_posts')) {
    $actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce' ) . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
  }
  return $actions;
}*/
 ?>
