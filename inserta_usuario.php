<?php
		$nombre=$_POST['nombre'];
		$apellidos=$_POST['apellidos'];
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		//echo $nombre." ".$apellidos." ".$email." ".$username." ".$password;
		
		// Estableciendo la conexión con MYSQL
		$conexion = mysql_connect("localhost","root","")
			or die("Error de conexión con el servidor");

		// Abriendo la base de datos sesiones		
		mysql_select_db("proyecto_final",$conexion)
			or die("Error de conexión con la base de datos");

		$consulta="INSERT INTO usuarios (nombre,apellidos,email,username,password,id_tipoUsuario) values ('$username','$apellidos','$email','$username','$password',2)";                         
		
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		echo "Usuario registrado correctamente";
		?>
		
		<a href="login.html"> volver al inicio </a>
			

