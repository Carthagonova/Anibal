#RewriteEngine On
#RewriteCond %{REMOTE_ADDR} !^195\.189\.209\.19$
#RewriteRule ^ - [R=503,L]
#ErrorDocument 503 '<!DOCTYPE html><html><head> <meta charset="utf-8"><title>Mantenimiento Programado</title> <style>body{font-family: Arial, sans-serif; background-color: #f2f2f2; text-align: center; padding-top: 50px;}h1{color: #333;}p{color: #666; font-size: 18px;}.email-link {color: #0066cc; text-decoration: none;}</style></head><body> <h1>Estamos realizando un mantenimiento programado</h1> <p>La p&aacutegina estar&aacute disponible en breves momentos. Disculpa las molestias.</p><p>Mientras tanto, puedes contactarnos por correo a <a class="email-link" href="mailto:carlos@sanchezdonate.com">carlos@sanchezdonate.com</a>.</p><p>O puedes contactarnos por telefono: Murcia (968897270); Alicante (865602560); o Sevilla (954186975)</body></html>'