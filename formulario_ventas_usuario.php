<html>
<head>
<title> ventas por usuario</title>
</head> 
<body background="imagenes\foto91.jpg">
<font face="Algerian">
<embed src="imagenes\TES V Skyrim Soundtrack - Before the Storm.mp3" autostart="true" loop=infinite volume="100"  width="0%" height="0%"> </embed>
<?php
	// Estableciendo la conexión con MYSQL
		$conexion = mysql_connect("localhost","root","")
			or die("Error de conexión con el servidor");

		// Abriendo la base de datos sesiones		
		mysql_select_db("proyecto_final",$conexion)
			or die("Error de conexión con la base de datos");

		$consulta="SELECT * FROM usuarios where id_tipoUsuario=2";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
	
		
?>
		<p><b> Ventas por usuario </b></p> <br>
		<form action="consulta_ventas_usuario.php" method="POST">
			<table>
			<tr>
			<td>
			USUARIO: 
			<select id="opciones" name="opciones">
			<?php
			while ($fila=mysql_fetch_assoc($resultado_consulta))
			{
		     ?>
				<option value=<?php echo $fila['id_usuario']?>><?php echo $fila['username']?></option>
			<?php
			}
			?>
			</select>
			</td>
			</tr>
			<tr>
			<td>
			<input type="submit" value="enviar">
			</td>
			</tr>
			</table>
		
		</form>
		</font>
		
		

</body>
</html>
