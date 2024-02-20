<?php
// Permitir insertar scripts
function my_acf_allow_unsafe_html( $field ) {
    // Aquí puedes añadir lógica adicional si solo quieres permitir HTML inseguro bajo ciertas condiciones
    return true; // Cambiar a true permite HTML inseguro
}

add_filter( 'acf/allow_unsafe_html', 'my_acf_allow_unsafe_html', 10, 1 );
?>