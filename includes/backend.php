<?php
// Login personalizado
function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/core/css/style-login.css' );
    echo '<meta name="robots" content="noindex">';
    echo "<style>h1 a{background-image:url('". get_template_directory_uri() ."/images/logo.png') !important};";
    echo ":root {--main-bg:". get_template_directory_uri() ."/images/marmol.jpg'};   </style>";
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

/*
add_action( 'login_footer', 'your_custom_footer' );
function your_custom_footer() {
    // Add your content here
    echo '<style>h1 a{background-image:url('. get_template_directory_uri() ."/images/logo.png') !important;};</style>";
}
*/
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'TUCOVIDSHOP';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/*
function wps_footer() {
echo '<div class="privacy-policy-page-link"><a href="http://www.embryologistmedia.com/join-us/" title="Join us">Join us</a></div>';
}
add_filter( 'login_footer', 'wps_footer' );*/

// Eliminamos metaboxes del Dashboard

  function example_remove_dashboard_widgets() {
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_browser_nag', 'dashboard', 'normal' );
  }

  add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' );




if(($current_user_id)>=2) {
function my_custom_admin_head() {
echo "<link rel='stylesheet' id='roberto' href='" . get_template_directory_uri() . "/core/css/users.css' media='all' />";
}
add_action( 'admin_head', 'my_custom_admin_head' );
}


?>
