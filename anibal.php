<?php
/*
Plugin Name: Anibal
Plugin URI:
Description: Multiplugin personalizado por Carlos Sánchez, Roberto Martinez y David Cedillo.
Author: Suros
Author URI:
Version: 1.0.6.5
License: GPLv2
*/

// Permisos de usuarios
// include 'includes/user-perm.php';
// Funcionalidades a ordernar
include 'includes/temp.php';
//Duplicación de entradas (en este caso juegos)
 include 'includes/games.php';
// Poder duplicar post
include 'includes/duplicate.php';
// Editar wysiwyg
include 'includes/wysiwyg.php';
// Editar backend
 include 'includes/backend.php';
// Editar woocommerce
include 'includes/woocommerce.php';
// Generar Shortcodes
include 'includes/shortcodes.php';
// Permitir SVG con movimiento y otros archivos
include 'includes/files.php';
// Force Downloads
include 'includes/force.php';
// Comprobar plugins
// De momento está el fallo de que siempre te los instala, tenemos que hacer que compruebe si está descargado, para no hacerlo si lo está
include 'includes/plugins-instaler.php';

?>
