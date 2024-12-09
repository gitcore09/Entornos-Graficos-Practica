<?php
    function connection(){
    $servidor = "localhost:4306";
    $usuario = "root";
    $contraseña = "";

    $bd = "entornos";

    $conn = mysqli_connect($servidor,$usuario,$contraseña);
    mysqli_select_db($conn,$bd);
    return $conn;
    }
?>