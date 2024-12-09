<?php
$user = "usuario";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['nombre'] ?? '';
    setcookie($user, $username, time() + (86400 * 30), "/");
    $msg = "¡Hola, $username! Tu nombre ha sido guardado.";
} else {
    if (isset($_COOKIE[$user])) {
        $nombre_usuario = $_COOKIE[$user];
        $msg = "Bienvenido de nuevo, $username.";
    } else {
        $username = '';
        $msg = "Por favor, ingresa tu nombre.";
    }
}
?>
<html>

    <head>
    </head>

    <body>
        <h1><?php echo $mensaje; ?></h1>

        <form method="POST" action="">
            <label for="nombre">Ingresa tu nombre de usuario:</label>
            <input type="text" id="nombre" name="nombre" required>
            <button type="submit">Guardar</button>
        </form>
    </body>

</html>