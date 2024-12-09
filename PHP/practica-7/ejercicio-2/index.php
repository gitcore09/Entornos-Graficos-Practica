<?php
$contador = "contador";

if (isset($_COOKIE[$contador])) {
    $visitas = $_COOKIE[$contador] + 1;
    setcookie($contador, $visitas, time() + (86400 * 30), "/"); 
    $mensaje = "Bienvenido nuevamente. Has visitado esta página $visitas veces.";
} else {
    $visitas = 1;
    setcookie($contador, $visitas, time() + (86400 * 30), "/");
    $mensaje = "¡Bienvenido! Es la primera vez que visitas esta página.";
}

?>

<html>

    <head>
    </head>

    <body>
        <h1><?php echo $mensaje; ?></h1>
    </body>
    
</html>