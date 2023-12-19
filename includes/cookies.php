<?php
$mi_plugin_url = plugin_dir_url( __FILE__ );


// Ahora $mi_plugin_url contiene la URL del directorio de tu plugin
function add_cookie_notice_footer() {
    $mi_plugin_url = plugin_dir_url( __FILE__ );
    echo "<link rel='stylesheet' id='cookies-css' href='" . $mi_plugin_url . "css/cookies.css' media='all' />";

    ?>
<div id="cookieConsentContainer" style="display: none;" data-nosnippet>
    <div style="color:var(--white)">Usamos cookies para asegurar que te damos la mejor experiencia en nuestra web. Aquí tienes nuestra <a rel= "nofollow" href="https://carlos.sanchezdonate.com/politica-privacidad/" style="color:var(--grey)">política de privacidad.</a></div>
    <div>  
        <button id="rejectCookies">Rechazar</button>
        <button id="acceptCookies">Aceptar</button>
    </div>
</div>
<script id="cookies-js" src="<?php echo $mi_plugin_url;?>/scripts/cookies.js" async></script>

<?php
}
add_action('wp_footer', 'add_cookie_notice_footer');



function add_cookie_track_header() {
    if (isset($_COOKIE['accept_cookies'])) {
    ?>
<!-- Google tag (gtag.js) -->
<!-- Global site tag (gtag.js) - Google Analytics normal -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-221399849-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-221399849-1');
</script>
<!-- GA4 -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TCPVF6WTDK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TCPVF6WTDK');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 10939785022 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10939785022"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10939785022');
</script>
<?php
    }
}
add_action('wp_head', 'add_cookie_track_header');


function add_cookie_track_footer() {
    if (isset($_COOKIE['accept_cookies'])) {
    ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Verifica el User-Agent para excluir Google/Bing bots
    var userAgent = navigator.userAgent;
    if (/Google|yahoo/i.test(userAgent)) {
        console.warn('Microsoft Clarity tracking is disabled for Google/yahoo bots.');
       return;}

    // Verifica si el script ya se ejecutó antes usando localStorage
    var clarityScriptLoaded = localStorage.getItem('clarityScriptLoaded');
    var delay = clarityScriptLoaded ? 0 : 5000;

    setTimeout(function() {
        // Crear y configurar el elemento script
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.text = `
            (function(c,l,a,r,i,t,y){
                c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
                t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
                y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
            })(window, document, "clarity", "script", "gfl7gtkkvs");
        `;
        document.head.appendChild(script);

        // Establece una bandera en localStorage para indicar que el script ya se cargó
        if (!clarityScriptLoaded) {
            localStorage.setItem('clarityScriptLoaded', 'true');
        }
    }, delay);
});

</script>
<?php
}}
add_action('wp_footer', 'add_cookie_track_footer');


// Lo que hay dentro de la Cookie si se acepta


    // Google Analytics



// Cookies en el footer




?>
