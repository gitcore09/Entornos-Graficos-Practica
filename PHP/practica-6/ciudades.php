<?php
    include('conn.php');
    $con = connection();
    $sql = "SELECT * FROM ciudades";
    $query= mysqli_query($con,$sql);
?>

<html>
    <table>
        <tbody>
            <?php while($row = mysqli_fetch_array($query)): ?>
            <tr>
                <th><?=$row['id']?></th>
                <th><?=$row['name']?></th>
                <th><?=$row['pais']?></th>
                <th><?=$row['hab']?></th>
                <th><?=$row['sup']?></th>
                <th><?=$row['metro']?></th>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</html>