<?php
include('conn.php');
$con = connection();
$sql = "CREATE DATABASE compras";
$query = mysqli_query($con,$sql);
$bd = 'compras';
mysqli_select_db($conn,$bd);
?>
