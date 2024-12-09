<?php
    function connection(){
    $servidor = "localhost:4306";
    $usuario = "root";
    $contraseña = "";
    $conn = mysqli_connect($servidor,$usuario,$contraseña);
    return $conn;
    }
?>