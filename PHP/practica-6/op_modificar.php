
MODIFICAR CIUDAD: 
		<form action="modify.php" method="POST">
			<label for="id">Id:</label><br>
			<input type="number" id="id" name="id" placeholder="001" required><br>
			<label for="name">Nombre:</label><br>
  			<input type="text" id="name" name="name" placeholder="San Rafael" required><br>
  			<label for="pais">Pais:</label><br>
  			<input type="text" id="pais" name="pais" placeholder="Argentina" required><br><br>
            <label for="hab">Habitantes:</label><br>
  			<input type="number" id="hab" name="hab" placeholder="1230000" required><br><br>
            <label for="sup">Superficies:</label><br>
  			<input type="number" id="sup" name="sup" placeholder="992959" required><br><br>
            <label for="tieneMetro">¿Tiene metro (0=No / 1=Si):</label><br>
  			<input type="number" id="metro" name="metro" min=0 max=1 placeholder="0" required><br><br>       
  			<input type="submit" value="Submit">
		</form>
