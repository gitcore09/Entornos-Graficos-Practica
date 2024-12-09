<?php
session_start();
if (isset($_SESSION['usuario']) && isset($_SESSION['password'])) {
    $usuario = $_SESSION['usuario'];
    $clave = $_SESSION['password'];
} else {
    header("Location: index.php");
    exit;
}
?>

<html>
    <head>
    </head>

    <body>
        <h1>Datos de Sesión</h1>
        <p> Usuario: <?= $usuario ?> </p>
        <p> Password: <?= $password ?> </p>
        <a href="logout.php">Cerrar Sesión</a>
    </body>
</html>