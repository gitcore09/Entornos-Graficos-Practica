<?php
include('conn.php');
$con = connection();
$bd = 'prueba';
mysqli_select_db($conn,$bd);

$sql = "CREATE TABLE canciones(
    id number NOT NULL,
    PRIMARY KEY (id)
    ";
    $query = mysqli_query($con,$sql);
    
?>
