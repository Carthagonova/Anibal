<?php
// Cambiar nombre tabla de contenidos y poder añadirle un data nosnippet

add_filter('lwptoc_before', function ($before) {
    return '<div id="indice-contenido" data-nosnippet>' . $before;
});
add_filter('lwptoc_after', function ($after) {
    return '</div>' . $after;
});
?>
