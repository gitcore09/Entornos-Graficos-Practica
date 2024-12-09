<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['password'] = $_POST['password'];
    header("Location: mostrar_sesion.php");
    exit;
} else {
    header("Location: formulario.php");
    exit;
}
?>