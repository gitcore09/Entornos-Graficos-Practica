<?php
session_start();
include('conn.php');
$con = connection();
$mail = $_POST['mail'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mail = $con($_POST['mail']);
    $sql = "SELECT * FROM alumnos WHERE mail=$mail";
    $query= mysqli_query($con,$sql);

    if ($query->num_rows > 0) {
        $fila = $resultado->fetch_assoc();
        $_SESSION['nombre'] = $fila['nombre'];
        header("Location: bienvenida.php");
        exit;
    } else {
        echo "<p>No se encontró ningún alumno con ese correo electrónico.</p>";
        echo '<a href="index.php">Volver</a>';
    }
} else {
    header("Location: index.php");
    exit;
}
?>