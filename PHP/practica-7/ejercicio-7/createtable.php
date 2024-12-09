<?php
include('conn.php');
$con = connection();
$bd = 'compras';
mysqli_select_db($conn,$bd);

$sql = "CREATE TABLE catalogo(
    id number NOT NULL,
    producto varchar(100) NOT NULL,
    precio float(9,2) NOT NULL,
    PRIMARY KEY (id)
    ";
    $query = mysqli_query($con,$sql);
    
?>

