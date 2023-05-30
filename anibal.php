<?php
/*
Plugin Name: Anibal
Plugin URI:
Description: Multiplugin.
Author: Carlos Sánchez, Roberto Martinez y Carla Álvarez
Author URI: https://carlos.sanchezdonate.com
Version: 2.0.6.5
License: GPLv2
*/

// Permisos de usuarios
// include 'includes/user-perm.php';
// Funcionalidades a ordernar
// include 'includes/del-coments.php';

// Generador de Sitemaps por medio de template
include 'includes/template-generator.php';
// Generador de metaetiquetas
include 'includes/metas-seo.php';
// Quitar mierdas varias de Wordpress
include 'includes/temp.php';
// Creación de Custom post tipes
// include 'includes/custom-post-type.php';
// Poder duplicar post
include 'includes/duplicate.php';
// Editar wysiwyg
// include 'includes/wysiwyg.php';
// Editar woocommerce
//include 'includes/woocommerce.php';
// Eliminar metarobots
 include 'includes/del-metarobots.php';
// Eliminar wp-json
// include 'includes/del-wpjson.php';
// Eliminar title
include 'includes/del-title.php';
// Eliminar Sitemap nativo de Wordpress
include 'includes/del-sitemap.php';
// Eliminar css plugins y wordpress
// include 'includes/del-css.php';
// Editar canonical
 include 'includes/del-canonical.php';
// Eliminar problema category. Evita el 404 con los /./
// include 'includes/del-category.php';
// Generar Shortcodes
// include 'includes/shortcodes.php';
// Permitir SVG con movimiento y otros archivos
include 'includes/files.php';
// Force Downloads
// include 'includes/force.php';
// Cambiar Heartbeat
include 'includes/heartbeat.php';
// Imperdir la actualización de plugins
// include 'includes/unupdate-plugins.php';
// Tabla de contenidos lwptoc
// include 'includes/tabla-contenidos.php';


// Comprobar plugins
// De momento está el fallo de que siempre te los instala, tenemos que hacer que compruebe si está descargado, para no hacerlo si lo está
//include 'includes/plugins-instaler.php';
// Generador de XML
//include 'includes/xml-generator.php';
?>
