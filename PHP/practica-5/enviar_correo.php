<?php
session_start();
if (isset($_SESSION['contador'])) {
    $_SESSION['contador']++;
} else {
    $_SESSION['contador'] = 1;
}
echo "Número de páginas visitadas en esta sesión: " . $_SESSION['contador'];

bool mail ( string $to , string $subject , string $message [, string $additional_headers [, string
$additional_parameters ]] )

$destinatario = "xx@xx.com ";
$asunto = "Prueba";
$cuerpo =  "<html>
            <head>
            <title>Correo</title>
            </head>
            <body>
            <h1>Hola UTN ISI FRRO </h1>
            <p>Hagan arquitectura de las computadoras cuatrimestral y sistemas operativos anual.</b>.</p>
            <p>De paso, me gustaria ser jefe de cátedra de Sistemas Operativos.</p>
            </body>
            </html>
";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail($destinatario,$asunto,$cuerpo,$headers)

?>