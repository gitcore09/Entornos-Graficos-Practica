<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tipo_titular'])) {
    $tipoTitular = $_POST['tipo_titular'];
    setcookie('tipo_titular', $tipoTitular, time() + (86400 * 30), "/");
    header("Location: index.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}
?>