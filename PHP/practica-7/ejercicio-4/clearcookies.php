<?php
// Borrar la cookie
setcookie('tipo_titular', '', time() - 3600, "/");
header("Location: index.php");
exit;
?>