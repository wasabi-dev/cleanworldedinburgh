<?php
/**
 * Simple formulario de contacto con PHP
 *
 * @author parzibyte
 * @see https://parzibyte.me/blog
 */

if (empty($_POST["name"])) {
    exit("Please, write your name");
}

if (empty($_POST["email"])) {
    exit("Please, write your email");
}

if (empty($_POST["message"])) {
    exit("Please, write your message");
}

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
    echo "Wrong email";
    exit;
}

$asunto = "Nuevo mensaje de sitio web";

$datos = "De: $name\nCorreo: $email\nMensaje: $message";
$message = "Has recibido un mensaje desde el formulario de contacto de tu sitio web. Aquí están los detalles:\n$datos";
$destinatario = "Clean World Edinburgh"; # aquí la persona que recibirá los mensajes
$encabezados = "Sender: cleanwor@cleanworldedinburgh.com\r\n"; # El remitente, debe ser un correo de tu dominio de servidor
$encabezados .= "From: $name <" . $email . ">\r\n";
$encabezados .= "Reply-To: $name <$email>\r\n";
$resultado = mail($destinatario, $asunto, $message, $encabezados);
if ($resultado) {
    echo "<h1>Mensaje enviado, ¡Gracias por contactarme!</h1>";
    echo "<p>Tu mensaje se ha enviado correctamente.</p><h2>Importante</h2><p>Revisa tu bandeja de SPAM, en ocasiones mis respuestas quedan ahí. </p>";
} else {
    echo "Tu mensaje no se ha enviado. Intenta de nuevo.";
}
?>