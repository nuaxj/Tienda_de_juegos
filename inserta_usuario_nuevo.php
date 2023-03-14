
<?php

		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$id_tipoUsuario=$_POST['id_tipoUsuario'];
		
		include("conexion.php");

		$consulta="INSERT INTO usuarios (nombre,apellidos,email,username,password,id_tipoUsuario) values ('$nombre','$apellidos','$email','$username','$password',$id_tipoUsuario)";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		header("Location:gestion_usuarios.php");
?>
			
		


