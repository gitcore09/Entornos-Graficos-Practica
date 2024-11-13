<?php
include 'enviar_correo.php'
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $web = "webmaster@gmail.com"
    $asuntoweb = "Consulta de Contacto: $nombre"
    mail($web,$asuntoweb,$mensaje,$headers);
}
?>