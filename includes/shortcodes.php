<?php
/*
// The shortcode function
function cta_2() {

// Advertisement code pasted inside a variable
$ctadiva .= '<button class="cta-contact">Contacta con nosotros</button>';

// Advertisement code pasted inside a variable
$ctadiv1 ='<a href="';
$ctadiv2 = home_url();
$ctadiv3 ='/contacto"><button class="cta-contact"><span>Contacta con nosotros</span></button></a>';
$ctadiv =  $ctadiv1 . $ctadiv2 . $ctadiv3;
// Ad code returned
return $ctadiv;}
// Register shortcode echo do_shortcode('[call_to_atention]');
add_shortcode('call_to_atention', 'cta_2');

// Número de whatsapp
function whpfunction() {
if(get_field('w_tel', 'user_2')){echo the_field('w_tel', 'user_2');}else{echo the_field('telefono', 'user_2');}
}

*/

// The shortcode function
function example_picture() {

// Advertisement code pasted inside a variable
return '<picture>
<source srcset="https://carlos.sanchezdonate.com/wp-content/uploads/etiqueta-picture-ejemplo.jp2" type="image/jp2" />
<source type="image/avif" srcset="https://carlos.sanchezdonate.com/wp-content/uploads/etiqueta-picture-ejemplo.avif">
<source srcset="https://carlos.sanchezdonate.com/wp-content/uploads/etiqueta-picture-ejemplo.webp" type="image/webp" />
<img src="https://carlos.sanchezdonate.com/wp-content/uploads/etiqueta-picture-ejemplo.png" alt="carlos sanchez" />
</picture>';
// Ad code returned
}
// Register shortcode echo do_shortcode('[call_to_atention]');
add_shortcode('picture_ejemplo', 'example_picture');


// The shortcode function
function screamingfrog_picture() {

// Advertisement code pasted inside a variable
return '<picture><source srcset="https://carlos.sanchezdonate.com/wp-content/uploads/screaming-renderizado-javascript.avif" type="image/avif" />
<img class="alignnone  wp-image-698" src="https://carlos.sanchezdonate.com/wp-content/uploads/screaming-renderizado-javascript.jpg" alt="Renderizado javascript por medio de screaming frog" width="755" height="473" />
</picture>';
// Ad code returned
}
// Register shortcode echo do_shortcode('[call_to_atention]');
add_shortcode('picture_screamingfrog', 'screamingfrog_picture');

// The shortcode Tarjetas de Consultorias
  function consultoria_card() {
  //  wp_enqueue_style( 'consul-princing', get_template_directory_uri() . '/css/consul-princig.css', false, '1.0', 'all' ); // Inside a parent theme
    // Devuelve el código de las tarjetas
    // El CSS lo he puesto por la DDBB
      return '<article id="post-display" class="grey-bg audit-padding"><div class="wrapper-card"><div class="card"><div class="card-title"><div class="h3targeta">Sesión Corbita</div><div class="h4targeta">Ideal si quieres una sola sesión</div></div><div class="card-price"><div class="h1targeta">125 &euro; <small>hora</small></div></div><div class="card-description"><ul><li><b>1 sesión</b> del SEO más avanzado</li><li>Reserva en el calendario cuando te venga bien</li><li>Escríbeme en la reserva de la cita toda la información posible</li></ul></div><div class="card-action"><a href="https://calendly.com/carlos-sanchez-asdrubal/consultoria-seo-tecnico" rel="nofollow" class="cardfakebutton" type="button"><button type="button">Reservar por 125 &euro;</button></a></div></div><div class="card popular"><div class="card-ribbon"><span>Recomendada</span></div><div class="card-title"><div class="h3targeta">Pack Trirreme</div><div class="h4targeta">¿Quieres enfrentarte a cualquier proyecto SEO sin miedo?</div></div><div class="card-price"><div class="h1targeta">110 &euro; <small>hora</small></div></div><div class="card-description"><ul><li><b>3 sesiones</b> a repartir a lo largo de un año</li><li>Decide cuando quieres tener estas sesiones</li></ul></div><div class="card-action"><a class="cardfakebutton" href="https://buy.stripe.com/fZe5l11Xjecb4924gl" rel="nofollow" type="button"><button type="button">Contrata por 330 &euro;</button></a></div></div><div class="card"><div class="card-title"><div class="h3targeta">Pack Quinquerreme</div><div class="h4targeta">Domina el mar del SEO Técnico</div></div><div class="card-price"><div class="h1targeta">94 &euro; <small>hora</small></div></div><div class="card-description"><ul><li><b>5 sesiones</b> a repartir a lo largo de un año</li><li>Decide cuando quieres tener estas sesiones</li></ul></div><div class="card-action"><a href="https://buy.stripe.com/4gw3cT31nfgf8pibIP" class="cardfakebutton" rel="nofollow" type="button"><button type="button">Contrata por 470 &euro;</button></a></div></div></div></article>';

    // Add code returned
    }
    // Register shortcode echo do_shortcode('[call_to_atention]');
    add_shortcode('tarjeta_consultoria', 'consultoria_card');


    function consultoria_cardbf() {

      return '<article id="post-display" class="grey-bg audit-padding"><div class="wrapper-card"><div class="card"><div class="card-title"><div class="h3targeta">Sesión Corbita</div><div class="h4targeta">Ideal si quieres una sola sesión</div></div><div class="card-price"><div class="h1targeta">125 &euro; <small>hora</small></div></div><div class="card-description"><ul><li><b>1 sesión</b> del SEO más avanzado</li><li>Reserva en el calendario cuando te venga bien</li><li>Escríbeme en la reserva de la cita toda la información posible</li></ul></div><div class="card-action"><a href="https://calendly.com/carlos-sanchez-asdrubal/consultoria-seo-tecnico" rel="nofollow" class="cardfakebutton" type="button"><button type="button">Reservar por 125 &euro;</button></a></div></div><div class="card popular"><div class="card-ribbon"><span>Recomendada</span></div><div class="card-title"><div class="h3targeta">Pack Trirreme</div><div class="h4targeta">¿Quieres enfrentarte a cualquier proyecto SEO sin miedo?</div></div><div class="card-price"><div class="h1targeta"><del class="redcolor">110</del> 99 &euro; <small>hora</small></div></div><div class="card-description"><ul><li><b>3 sesiones</b> a repartir a lo largo de un año</li><li>Decide cuando quieres tener estas sesiones</li></ul></div><div class="card-action"><a class="cardfakebutton" href="https://buy.stripe.com/14k28PatPfgf8pifZ7" rel="nofollow" type="button"><button type="button">Contrata por 297 &euro;</button></a></div></div><div class="card"><div class="card-title"><div class="h3targeta">Pack Quinquerreme</div><div class="h4targeta">Domina el mar del SEO Técnico</div></div><div class="card-price"><div class="h1targeta"><del class="redcolor">94</del> 75 &euro; <small>hora</small></div></div><div class="card-description"><ul><li><b>5 sesiones</b> a repartir a lo largo de un año</li><li>Decide cuando quieres tener estas sesiones</li></ul></div><div class="card-action"><a href="https://buy.stripe.com/14k14L31necb6ha9AI" class="cardfakebutton" rel="nofollow" type="button"><button type="button">Contrata por 375 &euro;</button></a></div></div></div></article>';

      // Add code returned
      }
      // Register shortcode echo do_shortcode('[call_to_atention]');
      add_shortcode('tarjeta_consultoriabf', 'consultoria_cardbf');

?>
