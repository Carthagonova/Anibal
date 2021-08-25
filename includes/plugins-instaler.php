<?php

function mm_get_plugins($plugins)
{
    $args = array(
            'path' => ABSPATH.'wp-content/plugins/',
            'preserve_zip' => false
    );

    foreach($plugins as $plugin)
    {
            mm_plugin_download($plugin['path'], $args['path'].$plugin['name'].'.zip');
            mm_plugin_unpack($args, $args['path'].$plugin['name'].'.zip');
            mm_plugin_activate($plugin['install']);
    }
}
function mm_plugin_download($url, $path)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    if(file_put_contents($path, $data))
            return true;
    else
            return false;
}
function mm_plugin_unpack($args, $target)
{
    if($zip = zip_open($target))
    {
            while($entry = zip_read($zip))
            {
                    $is_file = substr(zip_entry_name($entry), -1) == '/' ? false : true;
                    $file_path = $args['path'].zip_entry_name($entry);
                    if($is_file)
                    {
                            if(zip_entry_open($zip,$entry,"r"))
                            {
                                    $fstream = zip_entry_read($entry, zip_entry_filesize($entry));
                                    file_put_contents($file_path, $fstream );
                                    chmod($file_path, 0777);
                                    //echo "save: ".$file_path."<br />";
                            }
                            zip_entry_close($entry);
                    }
                    else
                    {
                            if(zip_entry_name($entry))
                            {
                                    mkdir($file_path);
                                    chmod($file_path, 0777);
                                    //echo "create: ".$file_path."<br />";
                            }
                    }
            }
            zip_close($zip);
    }
    if($args['preserve_zip'] === false)
    {
            unlink($target);
    }
}

function mm_plugin_activate($installer)
{
    $current = get_option('active_plugins');
    $plugin = plugin_basename(trim($installer));

    if(!in_array($plugin, $current))
    {
            $current[] = $plugin;
            sort($current);
            do_action('activate_plugin', trim($plugin));
            update_option('active_plugins', $current);
            do_action('activate_'.trim($plugin));
            do_action('activated_plugin', trim($plugin));
            return true;
    }
    else
            return false;
}

// Instalar los plugins
// if(is_plugin_active('advanced-custom-fields/advanced-custom-fields.php') && is_plugin_active('classic-editor/classic-editor.php') && is_plugin_active(plugin))

/*
if (is_plugin_active('advanced-custom-fields/advanced-custom-fields.php')) {
    $plugins = array(
        array('name' => 'classic-editor', 'path' => 'https://downloads.wordpress.org/plugin/classic-editor.1.6.zip')
    );
} else {
    $plugins = array(
        array('name' => 'advanced-custom-fields', 'path' => 'https://downloads.wordpress.org/plugin/advanced-custom-fields.5.9.5.zip')
    );
}
*/

include_once ABSPATH . 'wp-admin/includes/plugin.php';




$nombre_fichero = ABSPATH . 'wp-content/plugins/advanced-custom-fields/acf.php';

if (file_exists($nombre_fichero)) {
 $plugins = array();
}
else {
  $plugins = array(
    array('name' => 'advanced-custom-fields', 'path' => 'https://downloads.wordpress.org/plugin/advanced-custom-fields.5.9.5.zip'),
    array('name' => 'classic-editor', 'path' => 'https://downloads.wordpress.org/plugin/classic-editor.1.6.zip'),
    array('name' => 'wordpress-seo', 'path' => 'https://downloads.wordpress.org/plugin/wordpress-seo.16.1.1.zip'),
    // array('name' => 'miniorange-limit-login-attempts', 'path' => 'https://downloads.wordpress.org/plugin/miniorange-limit-login-attempts.zip'),


    array('name' => 'wp-graphql', 'path' => 'https://downloads.wordpress.org/plugin/wp-graphql.1.3.5.zip'),
    array('name' => 'wp-gatsby', 'path' => 'https://downloads.wordpress.org/plugin/wp-gatsby.1.0.8.zip'),
    array('name' => 'add-wpgraphql-seo', 'path' => 'https://downloads.wordpress.org/plugin/add-wpgraphql-seo.4.13.1.zip'),
    array('name' => 'fakerpress', 'path' => 'https://downloads.wordpress.org/plugin/fakerpress.zip'),
    array('name' => 'headless-cms', 'path' => 'https://downloads.wordpress.org/plugin/headless-cms.zip'),
// include '/plugins/standard.php';
// include '/plugins/react.php';
  );
}

 /*

 if ( is_plugin_active( 'advanced-custom-fields/acf.php' ) ) {

  $plugins = array()
   ;}
  else{

    $plugins = array(
      array('name' => 'advanced-custom-fields', 'path' => 'https://downloads.wordpress.org/plugin/advanced-custom-fields.5.9.5.zip'),
      array('name' => 'classic-editor', 'path' => 'https://downloads.wordpress.org/plugin/classic-editor.1.6.zip'),
      array('name' => 'wordpress-seo', 'path' => 'https://downloads.wordpress.org/plugin/wordpress-seo.16.1.1.zip'),
      array('name' => 'miniorange-limit-login-attempts', 'path' => 'https://downloads.wordpress.org/plugin/miniorange-limit-login-attempts.zip'),
      array('name' => 'wp-graphql', 'path' => 'https://downloads.wordpress.org/plugin/wp-graphql.1.3.5.zip'),
      array('name' => 'wp-gatsby', 'path' => 'https://downloads.wordpress.org/plugin/wp-gatsby.1.0.8.zip'),
      array('name' => 'add-wpgraphql-seo', 'path' => 'https://downloads.wordpress.org/plugin/add-wpgraphql-seo.4.13.1.zip'),
      array('name' => 'fakerpress', 'path' => 'https://downloads.wordpress.org/plugin/fakerpress.zip'),


      //require '/plugins/standard.php',
      //include 'includes/plugins/react.php'
    )

    ;}
if ( !is_plugin_active( $new_plugin ) ) {
  // new plugin is not active - activate it
  activate_plugin( $new_plugin );
}

/*
$plugins = array(
array('name' => 'advanced-custom-fields', 'path' => 'https://downloads.wordpress.org/plugin/advanced-custom-fields.5.9.5.zip'),
array('name' => 'classic-editor', 'path' => 'https://downloads.wordpress.org/plugin/classic-editor.1.6.zip'),
);*/


mm_get_plugins($plugins);

 ?>
