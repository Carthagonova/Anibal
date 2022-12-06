<?php
function limit_heartbeat( $settings ) {
$settings['interval'] = 35; // Cualquier valor entre 15 y 60 segundos
return $settings;
}
add_filter( 'heartbeat_settings', 'limit_heartbeat' );?>
