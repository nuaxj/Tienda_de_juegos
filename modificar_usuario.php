<html>
<head>
<title>modificacion de usuarios</title>
</head>
<body background="imagenes\foto91.jpg">
<font face="Algerian">
<embed src="imagenes\Sonic - Green Hill Zone Acapella.mp3" autostart="true" loop=infinite volume="100"  width="0%" height="0%"> </embed>

<?php

		$id_usuario=$_GET['id_usuario'];
		
		// Estableciendo la conexión con MYSQL
		$conexion = mysql_connect("localhost","root","")
			or die("Error de conexión con el servidor");

		// Abriendo la base de datos sesiones		
		mysql_select_db("proyecto_final",$conexion)
			or die("Error de conexión con la base de datos");

		$consulta="select * from usuarios where id_usuario=$id_usuario";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		$fila=mysql_fetch_assoc($resultado_consulta);
		
		?>
		<p><b> Modificar usuario </b></p> <br>
		<form action="inserta_usuario_modificado.php" method="POST">
			<table>
			<tr>
			<td>Nombre</td><td><input type="text" name="nombre" value="<?php echo $fila['nombre'];?>"></td>
			</tr>
			<tr>
			<td>Apellidos</td><td><input type="text" name="apellidos" value="<?php echo $fila['apellidos'];?>"></td>
			</tr>
			<tr>
			<td>Email</td><td><input type="text" name="email" value="<?php echo $fila['email'];?>"></td>
			</tr>
			<tr>
			<td>Username</td><td><input type="text" name="username" value="<?php echo $fila['username'];?>"></td>
			</tr>
			</tr>
			<tr>
			<td>Password</td><td><input type="text" name="password" value="<?php echo $fila['password'];?>"></td>
			</tr>
			<tr>
			<td>Tipo de Usuario</td><td><input type="text" name="id_tipoUsuario" value="<?php echo $fila['id_tipoUsuario'];?>"></td>
			</tr>
			<input type="hidden" name="id_usuario" value=<?php echo $id_usuario?>>
			<tr>
			<td><input type="submit" value="enviar"></td>
			</tr>
			</table>
		
		</form>
		
		<a href="gestion_usuarios.php"> volver </a>
			
		
</font>
</body>
</html>
