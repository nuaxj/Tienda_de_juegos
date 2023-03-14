
<?php

		$id_usuario=$_GET['id_usuario'];
		
		// Estableciendo la conexión con MYSQL
		$conexion = mysql_connect("localhost","root","")
			or die("Error de conexión con el servidor");

		// Abriendo la base de datos sesiones		
		mysql_select_db("proyecto",$conexion)
			or die("Error de conexión con la base de datos");

		$consulta="DELETE FROM usuarios WHERE id_usuario=$id_usuario;";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
			
		header("Location:gestion_usuarios.php");
			
?>
		


