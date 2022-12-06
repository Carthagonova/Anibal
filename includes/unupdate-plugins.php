<?php
function disable_plugin_updates( $value ) {
  //Se pueden añadir tantos unsets como quieras
    unset( $value->response['embed-calendly-scheduling/embed-calendly-scheduling.php'] );
    return $value;
}
add_filter( 'site_transient_update_plugins', 'disable_plugin_updates' );
?>
