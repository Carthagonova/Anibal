<?php

function calendly_shortcode() {
    ob_start();
    $mi_plugin_url = plugin_dir_url( __FILE__ );

    ?>

    <div class="calendly-booking-container stunning-text-wrapper">
        <div class="adr-fake-h2">Reserva una consultoría</div>
        <div class="calendly-options">
            <button id="in-person-button" class="active ">Visita presencial</button>
            <button id="online-button">Consulta online</button>
        </div>

    <div class="calendly-info">
        <div id="calendly-in-person" class="calendly-iframe active">
            <div class="adr-fake-h3">Consulta presencial</div>
            <div class="adr-cl-desc"><a href="https://maps.app.goo.gl/z7bKPu9w7MH61eo8A" target="_blank" class="cdl-link" rel="nofollow">Calle José Ortega y Gasset 58, 3 derecha</a>, 28006, Madrid</div>
            <!-- Principio del widget integrado de Calendly para visita presencial -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/debelareabogados-info/consultoria-presencial?hide_event_type_details=1&hide_gdpr_banner=1" data-resize="true" style="min-width:250px;height:500px;max-width:400px;"></div>
            <!-- Final del widget integrado de Calendly -->
        </div>

        <div id="calendly-online" class="calendly-iframe">
            <div class="adr-fake-h3">Consulta online</div>
            <div class="adr-cl-desc">Por medio de <a href="https://zoom.us/es/download" target="_blank" class="cdl-link" rel="nofollow">Zoom</a></div>
            <!-- Principio del widget integrado de Calendly para consulta online -->
            <div class="calendly-inline-widget" data-url="https://calendly.com/debelareabogados-info/consultoria-online?hide_event_type_details=1&hide_gdpr_banner=1" data-resize="true" style="min-width:250px;height:500px;max-width:400px;"></div>
            <!-- Final del widget integrado de Calendly -->
        </div>
    </div>

    </div>

    <?php
    return ob_get_clean();
}
add_shortcode('calendly_widget', 'calendly_shortcode');

// Precargar scripts de Calendly
function calendly_precargar() {
    $mi_plugin_url = plugin_dir_url( __FILE__ );
    echo "<link rel='stylesheet' id='calendly-css' href='" . $mi_plugin_url . "css/calendly.css' media='all' />";
    echo '<link rel="preload" href="https://assets.calendly.com/assets/external/widget.js" as="script">';
}
add_action('wp_head', 'calendly_precargar');

// Cargar scripts de Calendly en el pie de página
function cargar_calendly_script() {
    $mi_plugin_url = plugin_dir_url( __FILE__ );
    ?>
    <script id="cookies-js" src="<?php echo $mi_plugin_url;?>/scripts/calendly.js" async></script>
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
    <?php
}
add_action('wp_footer', 'cargar_calendly_script');
