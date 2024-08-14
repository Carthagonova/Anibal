<?php
$mi_plugin_url = plugin_dir_url( __FILE__ );

// Función para agregar el aviso de cookies en el footer
function add_cookie_notice_footer() {
    $noCookiePopup = isset($_GET['noCookiePopup']) && $_GET['noCookiePopup'] == 'true';

    // Mostrar siempre el aviso de cookies para poder controlarlo con el botón
    $mi_plugin_url = plugin_dir_url( __FILE__ );
    echo "<link rel='stylesheet' id='cookies-css' href='" . $mi_plugin_url . "css/cookies.css?v=01' media='all' />";
    ?>
    <div id="cookieConsentContainer" data-nosnippet style="display: <?php echo isset($_COOKIE['accept_cookies']) ? 'none' : 'flex'; ?>;">
        <div style="color:var(--white)">Usamos cookies para asegurar que te damos la mejor experiencia en nuestra web. Aquí tienes nuestra <a rel="nofollow" href="https://carlos.sanchezdonate.com/politica-privacidad/" style="color:var(--grey)">política de privacidad.</a></div>
        <div>  
            <button id="rejectCookies">Rechazar</button>
            <button id="acceptCookies">Aceptar</button>
        </div>
    </div>

    <?php
    // Mostrar el botón de configurar cookies si la cookie 'accept_cookies' está presente o si ha sido rechazada
    if (isset($_COOKIE['accept_cookies']) && ($_COOKIE['accept_cookies'] == 'true' || $_COOKIE['accept_cookies'] == 'false')) {
        // Comprobar si la URL actual no coincide con las URLs especificadas
        $current_url = $_SERVER['REQUEST_URI'];
        if (!preg_match('/\/master-seo-tecnico\/|\/servicios\/.*/', $current_url)) {
            ?>

            <div id="cookieSettingsButton"></div>
            <?php
        }
    }
    ?>

    <script id="cookies-js" src="<?php echo $mi_plugin_url; ?>/scripts/cookies.js" defer></script>
    <script>
        document.getElementById('acceptCookies').addEventListener('click', function() {
            document.cookie = "accept_cookies=true; path=/; max-age=31536000"; // Establece la cookie por un año
            gtag('consent', 'update', {
                'ad_storage': 'granted',
                'analytics_storage': 'granted'
            });
            location.reload(); // Recargar la página para aplicar los cambios
        });

        document.getElementById('rejectCookies').addEventListener('click', function() {
            document.cookie = "accept_cookies=false; path=/; max-age=2592000"; // Establece la cookie por 30 días (1 mes)
            gtag('consent', 'update', {
                'ad_storage': 'denied',
                'analytics_storage': 'denied'
            });
            location.reload(); // Recargar la página para aplicar los cambios
        });

        <?php if (isset($_COOKIE['accept_cookies']) && ($_COOKIE['accept_cookies'] == 'true' || $_COOKIE['accept_cookies'] == 'false')) : ?>
        document.getElementById('cookieSettingsButton').addEventListener('click', function() {
            // Mostrar el panel de cookies nuevamente
            document.getElementById('cookieConsentContainer').style.display = 'flex';
        });
        <?php endif; ?>
    </script>
    <?php
}
add_action('wp_footer', 'add_cookie_notice_footer');

// Función para agregar el modo de consentimiento y los scripts de Google en el header
function add_cookie_track_header() {
    ?>
    <!-- Google Consent Mode -->
    <script>
      // Inicializa el Consent Mode con el estado de consentimiento predeterminado
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('consent', 'default', {
        'ad_storage': 'denied',
        'analytics_storage': 'denied'
      });
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TCPVF6WTDK"></script>
    <script>
      gtag('js', new Date());
      gtag('config', 'G-TCPVF6WTDK', { 'anonymize_ip': true });
    </script>

    <!-- Global site tag (gtag.js) - Google Ads -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-10939785022"></script>
    <?php
    // Si la cookie 'accept_cookies' está presente, actualizar el estado de consentimiento
    if (isset($_COOKIE['accept_cookies']) && $_COOKIE['accept_cookies'] == 'true') {
        ?>
        <script>
            gtag('consent', 'update', {
                'ad_storage': 'granted',
                'analytics_storage': 'granted'
            });
        </script>
        <?php
    }
}
add_action('wp_head', 'add_cookie_track_header');

// Función para agregar Microsoft Clarity en el footer, respetando el consentimiento
function add_cookie_track_footer() {
    if (isset($_COOKIE['accept_cookies']) && $_COOKIE['accept_cookies'] == 'true') {
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Verifica el User-Agent para excluir Google/Bing bots
            var userAgent = navigator.userAgent;
            if (/Google|yahoo/i.test(userAgent)) {
                console.warn('Microsoft Clarity tracking is disabled for Google/yahoo bots.');
               return;
            }

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
    }
}
add_action('wp_footer', 'add_cookie_track_footer');
?>
