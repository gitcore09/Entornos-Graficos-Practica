ALTA CIUDAD: 
<form action="add.php" method="POST">
  			<label for="name">Nombre:</label><br>
  			<input type="text" id="name" name="name" placeholder="Gualeguaychu" required><br>
  			<label for="pais">Pais:</label><br>
  			<input type="text" id="pais" name="pais" placeholder="Argentina" required><br><br>
            <label for="hab">Habitantes:</label><br>
  			<input type="number" id="hab" name="hab" placeholder="1230000" required><br><br>
            <label for="sup">Superficies:</label><br>
  			<input type="number" id="sup" name="sup" placeholder="992959" required><br><br>
            <label for="tieneMetro">¿Tiene metro (0=No / 1=Si):</label><br>
  			<input type="number" id="metro" name="metro" min=0 max=1 placeholder="0" required><br><br>       
  			<input type="submit" value="Submit">

            <?php
            if(!empty($_POST)){
			if(empty($_POST['name']))
			echo "El nombre no puede ser vacio"
			if(empty($_POST['pais']))
			echo "El pais no puede estar vacio"
            if(empty($_POST['hab']))
			echo "La ciudad no puede no tener habitantes"
            if(empty($_POST['sup']))
			echo "La ciudad no puede no tener superficie"
            if(empty($_POST['metro']))
			echo "¿Tiene metro?"
		    }?>

</form> 
