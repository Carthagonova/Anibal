<?php
if(isset($_COOKIE["usuarioSpam"]) && $_COOKIE["usuarioSpam"] == "1") {
  // Manejar el intento como spam
  die("Tu solicitud ha sido identificada como spam.");
}
function robert_form() {
  $mi_plugin_url = plugin_dir_url( __FILE__ );
//include 'recaptcha.php';

/*
<script src="https://www.google.com/recaptcha/api.js"></script>
 <script>
   function onSubmit(token) {
     document.getElementById("robert_form").submit();
   }
 </script>
 */

 ?>
<style>
[name="firstname"], div#sendmessage {
    display: none;
}
</style>
<div id="robert_form" class="form">
          <div id="sendmessage">¡El mensaje ha sido enviado!</div>
          <div id="errormessage"></div>
          <form 
          action="<?php echo $mi_plugin_url; ?>enviar_correo.php" 
          method="post" role="form" 
          class="contactForm formulario" 
          onsubmit="return validarCampos()">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="nombre" 
                class="form-control sib-NAME-area" id="name" 
                placeholder="Nombre" data-rule="minlen:4" 
                data-msg="Ingrese al menos 4 caracteres" required/>
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control sib-NAME-area" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Por favor, introduce un email válido" required/>
                <div class="validation"></div>
              </div>
              </div>
            </div>
            <input type="text" 
                name="firstname" id="calle" class="form-control sib-NAME-area" placeholder="direccion"
                  />
                  <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">

            <div class="form-group">
              <input type="text" 
              class="form-control sib-NAME-area" 
              name="subject" id="subject"
               placeholder="Asunto" 
               data-rule="minlen:4" 
               data-msg="Ingrese al menos 8 caracteres" />
              <div class="validation"></div>
            </div>
            <div class="form-group">

              <textarea class="form-control" name="mensaje" rows="105" cols="40" data-rule="required"
               data-msg="Por favor, escribe algo para nosotros" aria-invalid="false" placeholder="Tu mensaje *"></textarea>
              
              <div class="validation"></div>
            </div>
            
            <p><span>
              <input type="checkbox" id="legal" name="legal" required>
              <label for="legal">
                 Acepto el 
                 <a href="https://carlos.sanchezdonate.com/aviso-legal/"
                  target="_blank">Aviso Legal</a> y la
                   <a href="https://carlos.sanchezdonate.com/politica-privacidad/">
                    Política de Protección de Datos</a></label></span></p>
            <div class="text-center">
              <button type="submit" class="cta" style="background: var(--secondary);" id="submit-form"
              <?php 
              /*
              class="g-recaptcha" 
              data-sitekey="6LfagXkpAAAAAK0R7SqKQwWkQ0bhbUpYrfsENvFf" 
              data-callback='onSubmit' 
              data-action='submit'
              */
              ?>
              >Enviar Mensaje</button></div>
          </form>
        </div>
        <div id="messages"></div>
        <div id="notification"></div>
        <div id="mensaje-error"></div>

      </div>
      <?php
      /*
            function wp_formscss() {
              
              $mi_plugin_url = plugin_dir_url( __FILE__ );
      
              ?>
            <link 
            rel='stylesheet' 
            href='<?php echo $mi_plugin_url; ?>css/style.css' 
            type='text/css' media='all'/>
           
            <?php
          }
          */
            
            
      function wp_formsjs() {
        $mi_plugin_url = plugin_dir_url( __FILE__ );

        ?>
      <script src="<?php echo $mi_plugin_url; ?>js/message.js"></script>
      <script src="<?php echo $mi_plugin_url; ?>js/form.js"></script>
      <?php
      }
    //  add_action('wp_footer', 'wp_formscss'); 
      add_action('wp_footer', 'wp_formsjs'); 
    }
      add_shortcode('contacto', 'robert_form');
?>