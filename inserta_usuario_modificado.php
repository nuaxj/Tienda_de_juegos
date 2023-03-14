
<?php

		$id_usuario=$_POST['id_usuario'];
		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$id_tipoUsuario=$_POST['id_tipoUsuario'];
		
		
		// Estableciendo la conexión con MYSQL
		$conexion = mysql_connect("localhost","root","")
			or die("Error de conexión con el servidor");

		// Abriendo la base de datos sesiones		
		mysql_select_db("proyecto",$conexion)
			or die("Error de conexión con la base de datos");

		$consulta="UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', email='$email', username='$username' , password='$password', id_tipoUsuario=$id_tipoUsuario where id_usuario=$id_usuario;";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		
		
		header("Location:gestion_usuarios.php");
	?>
			
		


