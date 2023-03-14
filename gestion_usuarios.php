<html>
<head>
<title>Gestión de usuarios</title>
</head>
<body background="imagenes\foto91.jpg">
<font face="Algerian">
<P><B>GESTIÓN DE USUARIOS</B></P><BR>
<embed src="imagenes\Sonic - Green Hill Zone Acapella.mp3" autostart="true" loop=infinite volume="100"  width="0%" height="0%"> </embed>

<?php
		// Estableciendo la conexión con MYSQL
		$conexion = mysql_connect("localhost","root","")
			or die("Error de conexión con el servidor");

		// Abriendo la base de datos sesiones		
		mysql_select_db("proyecto_final",$conexion)
			or die("Error de conexión con la base de datos");

		$consulta="SELECT * FROM usuarios";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		$num_campos=mysql_num_fields($resultado_consulta);
		
		echo "<table border=1>";
		echo "<tr>";
		echo "<td><b>nombre</b></td>";
		echo "<td><b>apellidos</b></td>";
		echo "<td><b>email</b></td>";
		echo "<td><b>username</b></td>";
		echo "<td><b>password</b></td>";
		echo "<td><b>id_tipoUsuario</b></td>";
		echo "<td><b>Modificar</b></td>";
		echo "<td><b>Eliminar</b></td>";
		   
		echo "</tr>";
		
		while ($fila=mysql_fetch_array($resultado_consulta)) {
			echo "<tr>";
			for($i=1; $i<$num_campos; $i++) {
				echo "<td> $fila[$i] </td>";
			}
			$id_usuario=$fila[0];
			echo "<td> <a href='modificar_usuario.php?id_usuario=$id_usuario'> modificar </a></td>";
			echo "<td> <a href='eliminar_usuario.php?id_usuario=$id_usuario'> eliminar </a></td>";
			echo "</tr>";
			
		}
		echo "</table>";
		echo "<BR>";
		echo "<a href='usuario_nuevo.php'> usuario nuevo </a>";
		echo "<BR>";

?>
</font>
<a href="logout.php"> cerrar sesion



</body>
</html>
