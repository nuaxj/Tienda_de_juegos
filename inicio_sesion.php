<html>
<head>
<title>Página de autenticación</title>
</head>
<body >

<?php

	session_start();
	
	
	$user = $_POST['usuario'];
	$pass = $_POST['contrasena'];

	if(empty($user)||empty($pass)) {
		die("Falta usuario y/o contraseña");
	} else {
		// Estableciendo la conexión con MYSQL
		$conexion = mysql_connect("localhost","root","")
			or die("Error de conexión con el servidor");

		// Abriendo la base de datos sesiones		
		mysql_select_db("proyecto_final",$conexion)
			or die("Error de conexión con la base de datos");

		$consulta="SELECT * FROM usuarios WHERE usuarios.username='$user' and usuarios.password='$pass'";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		$total_filas=mysql_num_rows($resultado_consulta);
		
		if($total_filas==0) {
			echo "Usuario y/o contraseña incorrectos";
			echo "<br>";
			echo "<a href='login.html'> volver al inicio ";
		} else {
			$fila=mysql_fetch_object($resultado_consulta);
			$tipoUsuario=$fila->id_tipoUsuario;
			
			if($tipoUsuario==1) {
				$_SESSION['usuario']=$user;
				$_SESSION['tipoUsuario']=$tipoUsuario;
				header("Location:administrador.php");
			} else {
				$_SESSION['usuario']=$user;
				$_SESSION['tipoUsuario']=$tipoUsuario;
				header("Location:usuario.php");
			}
		}
	}

?>
</body>
</html>
