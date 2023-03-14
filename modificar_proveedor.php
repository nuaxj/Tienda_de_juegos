<html>
<head>
<title>modificacion de proveedor</title>
</head>
<body background="imagenes\foto91.jpg">
<font face="Algerian">
<embed src="imagenes\Kingdom Hearts Music - Vs Sephiroth.mp3" autostart="true" loop=infinite volume="100"  width="0%" height="0%"> </embed>
<?php

		$id_proveedor=$_GET['id_proveedor'];
		
		// Estableciendo la conexión con MYSQL
		$conexion = mysql_connect("localhost","root","")
			or die("Error de conexión con el servidor");

		// Abriendo la base de datos sesiones		
		mysql_select_db("proyecto",$conexion)
			or die("Error de conexión con la base de datos");

		$consulta="select * from proveedores where id_proveedor=$id_proveedor";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		$fila=mysql_fetch_assoc($resultado_consulta);
		
		?>
		<p><b> Modificar proveedor </b></p> <br>
		<form action="inserta_proveedor_modificado.php" method="POST">
			<table>
			<tr>
			<td>Proveedor</td><td><input type="text" name="proveedor" value="<?php echo $fila['proveedor'];?>"></td>
			</tr>
			<tr>
			<td>Domicilio</td><td><input type="text" name="domicilio" value="<?php echo $fila['domicilio'];?>"></td>
			</tr>
			<tr>
			<td>Teléfono</td><td><input type="text" name="telefono" value="<?php echo $fila['telefono'];?>"></td>
			</tr>
			<tr>
			<td>Email</td><td><input type="text" name="email" value="<?php echo $fila['email'];?>"></td>
			</tr>
			</tr>
			<tr>
			<td>CIF</td><td><input type="text" name="cif" value="<?php echo $fila['cif'];?>"></td>
			</tr>
			<input type="hidden" name="id_proveedor" value=<?php echo $id_proveedor?>>
			<tr>
			<td><input type="submit" value="enviar"></td>
			</tr>
			</table>
		
		</form>
		
		<?php
		
		//header("Location:gestion_proveedores.php");
	?>
			
</font>
</body>
</html>
