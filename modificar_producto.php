<html>
<head>
<title>modificacion de productos</title>
</head>
<body background="imagenes\foto91.jpg">
<font face="Algerian">
<embed src="imagenes\Saria's Song (Lost Woods) from Legend of Zelda Ocarina of Time Played on STL Ocarina.mp3" autostart="true" loop=infinite volume="100"  width="0%" height="0%"> </embed>
<?php

		$id_producto=$_GET['id_producto'];
		
		// Estableciendo la conexión con MYSQL
		$conexion = mysql_connect("localhost","root","")
			or die("Error de conexión con el servidor");

		// Abriendo la base de datos sesiones		
		mysql_select_db("proyecto",$conexion)
			or die("Error de conexión con la base de datos");

		$consulta="select * from productos where id_producto=$id_producto";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		$fila=mysql_fetch_assoc($resultado_consulta);
		
		?>
		<p><b> Modificar producto </b></p> <br>
		<form action="inserta_producto_modificado.php" method="POST">
			<table>
			<tr>
			<td>Producto</td><td><input type="text" name="producto" value="<?php echo $fila['producto'];?>"></td>
			</tr>
			<tr>
			<td>Descripcion</td><td><input type="text" name="descripcion" value="<?php echo $fila['descripcion'];?>"></td>
			</tr>
			<tr>
			<td>Precio</td><td><input type="text" name="precio" value="<?php echo $fila['precio'];?>"></td>
			</tr>
			<tr>
			<td>Stock</td><td><input type="text" name="stock" value="<?php echo $fila['stock'];?>"></td>
			</tr>
			</tr>
			<tr>
			<td>Imagen</td><td><input type="text" name="imagen" value="<?php echo $fila['foto'];?>"></td>
			</tr>
			<input type="hidden" name="id_producto" value=<?php echo $id_producto?>>
			<tr>
			<td><input type="submit" value="enviar"></td>
			</tr>
			</table>
		
		</form>
		
		<?php
		
		//header("Location:gestion_productos.php");
	?>
			
		
</font>
</body>
</html>
