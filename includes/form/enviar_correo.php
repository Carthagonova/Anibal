<?php
session_start();
ini_set('display_errors', 0); // #CAMBIO Desactiva la visualización de errores
ini_set('default_charset', 'UTF-8');
mb_internal_encoding('UTF-8');
header('Content-Type: text/html; charset=utf-8');
header('Content-Type: application/json');

// Establecer el tiempo de expiración de la sesión en un minuto
$session_expiration = 60; // 1 minuto
session_set_cookie_params($session_expiration);


/*
Activar si se activa reca*tcha
if (isset($_POST['g-recaptcha-response'])) {
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $secretKey = "6LfagXkpAAAAAE52x0CD-j_hXcCCeraamTQFMrPZ"; // Reemplaza esto con tu clave secreta real de reCAPTCHA v3

    // Haciendo la solicitud de verificación a Google
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $recaptchaResponse);
    $responseKeys = json_decode($response, true);

    // Comprobando la respuesta
    if ($responseKeys["success"]) {
        // El código para manejar un envío de formulario exitoso va aquí
    } else {
        // Acción a tomar si la verificación de reCAPTCHA falla
        echo json_encode(array('status' => 'error', 'message' => 'Error de verificación reCAPTCHA.'));
        exit;
    }
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Token de reCAPTCHA no proporcionado.'));
    exit;
}
*/

// Validación del lado del servidor
$errores = [];

if (!isset($_POST['nombre']) || empty(trim($_POST['nombre']))) {
    $errores[] = 'El campo nombre es obligatorio.';
}

if (!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errores[] = 'El campo email es obligatorio y debe contener un email válido.';
}

if (!isset($_POST['mensaje']) || empty(trim($_POST['mensaje']))) {
    $errores[] = 'El campo mensaje es obligatorio.';
}

if (!isset($_POST['legal']) || $_POST['legal'] !== 'on') {
    $errores[] = 'Debe aceptar el aviso legal y la protección de datos.';
}

// Si hay errores, devolver respuesta y no procesar más
if (!empty($errores)) {
    echo json_encode(['status' => 'error', 'message' => implode(' ', $errores)]);
    exit; // Detener la ejecución del script
}

if (isset($_POST['firstname']) && !empty($_POST['firstname'])) {
    // Enviar el código de estado 403
// Marcar al usuario como spam
$urlActual = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

setcookie("usuarioSpam", "1", time() + (86400 * 30), "/"); // Marca por 30 días
echo '<script>window.location.href="pagina_error.php";</script>';

header("Location: $urlActual");
exit;
}




if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['mensaje'])) {
    // Comprobar si el formulario ya ha sido enviado
    if (isset($_SESSION['formulario_enviado']) && $_SESSION['formulario_enviado'] === true) {
        $response = array('status' => 'error', 'message' => 'El formulario ya ha sido enviado.');
    } else {
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        $asunto = $_POST['subject'];
        $legal = ($_POST['legal'] == 'on') ? 'Acepto el aviso legal y la protección de datos' : 'No acepta el aviso legal y la protección de datos';

        $to = "carlos@sanchezdonate.com";
        $sender = "wordpress@sanchezdonate.com";
        $subject = $_POST['subject'] . " - Contacto Web Carlos";

        // Construir el cuerpo del correo con HTML y CSS
        $body = "<html><head><style>body { font-family: Arial, sans-serif; }</style></head><body>";
        $body .= "<p>Nombre y apellidos: $nombre</p>";
        $body .= "<p>Correo electrónico: $email</p>";
        $body .= "<p>Asunto: $asunto</p>";
        $body .= "<p>Comentario: $mensaje</p>";
        $body .= "<p>$legal</p>";
        $body .= "<p>$promo</p>";
        $body .= "</body></html>";

        // Configurar las cabeceras para enviar contenido HTML
        $headers = "From: " . $sender . "\r\n";
        $headers .= "Reply-To: " . $email . "\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        if (mail($to, $subject, $body, $headers)) {
            $subject_emisor = "Contacto Carlos Sánchez";

            // Construir el cuerpo del correo de respuesta con HTML y CSS
            $body_emisor = "<html><head><style>body { font-family: Arial, sans-serif;}</style></head><body>";
            $body_emisor .= "<p>¡Hola!</p>";
            $body_emisor .= "<p>Gracias por contactar con nosotros.</p>";
            $body_emisor .= "<p>En breve nos pondremos en contacto con usted.</p>";
            $body_emisor .= "<p>Un saludo.</p>";
            $body_emisor .= "<img src='https://carlos.sanchezdonate.com/wp-content/uploads/cover-asdrubal.jpg' alt='Logo Carlos Sánchez'>";
            $body_emisor .= "</body></html>";

            mail($email, $subject_emisor, $body_emisor, $headers);  // Envía el correo de respuesta al emisor

            $response = array('status' => 'success', 'message' => 'El correo electrónico ha sido enviado correctamente.');

            // Marcar el formulario como enviado en la sesión
            $_SESSION['formulario_enviado'] = true;
            $_SESSION['formulario_expiracion'] = time() + $session_expiration;
        } else {
            $response = array('status' => 'error', 'message' => 'Ha ocurrido un error al enviar el correo electrónico. Por favor, inténtelo de nuevo más tarde.');
        }
    }
} else {
    $response = array('status' => 'error', 'message' => 'Los campos requeridos no se han proporcionado.');
}

echo json_encode($response);
?>