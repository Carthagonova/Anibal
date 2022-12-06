<?php
$include_path = get_template_directory().'/includes/';



/* Añadir CSS*/
add_action('wp_head', 'scripts_css');
function scripts_css(){
?>
<link rel='stylesheet' href='<?php echo plugin_dir_url( __FILE__ ).'css/style.css';?>' type='text/css' media='all' />
<?php
};

/* añadir al footer */
add_action('wp_footer', 'your_function_name');
function your_function_name(){
?>
<script type='text/javascript' src='<?php echo plugin_dir_url( __FILE__ ).'scripts/script.js';?>'></script>
<?php
};




 ?>
