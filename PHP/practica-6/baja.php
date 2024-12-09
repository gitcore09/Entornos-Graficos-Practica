<?php  
    include('conn.php');
    $con = connection();
    $id = $_POST['id'];
    $sql = "DELETE FROM ciudades WHERE id = $id";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    };
    ?>