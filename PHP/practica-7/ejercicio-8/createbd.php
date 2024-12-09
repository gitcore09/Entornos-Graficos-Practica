<?php
include('conn.php');
$con = connection();
$sql = "CREATE DATABASE prueba";
$query = mysqli_query($con,$sql);
$bd = 'prueba';
mysqli_select_db($conn,$bd);
?>
