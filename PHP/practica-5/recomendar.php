<?php
include 'enviar_correo.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $email_amigo = $_POST['email_amigo'];
    $asunto_amigo = "Te recomiendo un sitio web";
    $cuerpo_amigo = "
    <html>
    <head>
        <title>Recomendación de sitio</title>
    </head>
    <body>
        <h2>Hola,</h2>
        <p>$nombre ($email) te recomienda visitar el siguiente sitio web:</p>
        <p><a href='https://www.entornos.com'>Visita nuestro sitio</a></p>
        <p>¡Te esperamos!</p>
    </body>
    </html>
    ";

    mail($email_amigo, $asunto_amigo, $cuerpo_amigo, $headers);
}
?>