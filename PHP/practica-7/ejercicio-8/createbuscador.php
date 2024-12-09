<?php
include('conn.php');
$con = connection();
$bd = 'prueba';
mysqli_select_db($conn,$bd);

$sql = "CREATE TABLE buscador(
    id number NOT NULL,
    cancionid number NOT NULL,
    PRIMARY KEY (id)
    FOREIGN KEY (cancionid) REFERENCES canciones(id)
    ";
    $query = mysqli_query($con,$sql);
    
?>
