<?php  
    include('conn.php');
    $con = connection();
    $id = null;
    $name = $_POST['name'];
    $pais = $_POST['pais'];
    $hab = $_POST['hab'];
    $sup = $_POST['sup'];
    $metro = $_POST['metro'];
    $sql = "INSERT INTO ciudades VALUES('$id', '$name', '$pais', '$hab', '$sup', '$metro')";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };
    ?>