<?php
session_start();

if (isset($_SESSION['nombre'])) {
    $nombre = $_SESSION['nombre'];
} else {echo '<a href="formulario.php">Volver al formulario</a>'; exit;}
?>

<html>
    <head>
    </head>

    <body>
        <h1>Bienvenida</h1>
        <p>Hola, <?= $nombre ?>. ¡Bienvenido!</p>
        <a href="logout.php">Cerrar Sesión</a>
    </body>
</html>