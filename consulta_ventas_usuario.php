<html>
<head>
<title>Ventas por usuario</title>
</head>
<body background="imagenes\foto91.jpg">
<font face="Algerian">
<embed src="imagenes\TES V Skyrim Soundtrack - Before the Storm.mp3" autostart="true" loop=infinite volume="100"  width="0%" height="0%"> </embed>
<?php
	$opciones=$_POST['opciones'];
	$id_usuario=$opciones[0];
	session_start();
	if($_SESSION['tipoUsuario']==1) {
		echo "Gestión de ventas";
		echo "<BR>";
		$user=$_SESSION['usuario'];
		echo "USUARIO: ".$user;
		echo "<BR>";
		echo "<BR>";
		echo "<BR>";
		
		// Estableciendo la conexión con MYSQL
		$conexion = mysql_connect("localhost","root","")
			or die("Error de conexión con el servidor");

		// Abriendo la base de datos sesiones		
		mysql_select_db("proyecto_final",$conexion)
			or die("Error de conexión con la base de datos");

		$consulta="SELECT * FROM pedidos,usuarios where pedidos.id_usuario=usuarios.id_usuario and usuarios.id_usuario=$id_usuario";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		$num_campos=mysql_num_fields($resultado_consulta);
		
		echo "<p><b>Lista de pedidos</b></> <br>";
		echo "<br>";
		echo "<table border=1>";
		echo "<tr>";
		echo "<td><b>id_pedido</b></td>";
		echo "<td><b>fecha</b></td>";
		echo "<td><b>total</b></td>";
		echo "<td><b>usuario</b></td>";
		echo "<td><b>detalle</b></td>";
		   
		echo "</tr>";
		
		while ($fila=mysql_fetch_assoc($resultado_consulta)) {
			echo "<tr>";
			
			echo "<td>".$fila['id_pedido']."</td>";
			echo "<td>".$fila['fecha']."</td>";
			echo "<td>".$fila['total']."</td>";
			echo "<td>".$fila['username']."</td>";
			$username=$fila['username'];
			$id_pedido=$fila['id_pedido'];
			echo "<td> <a href='detalle_ventas_usuario.php?id_pedido=$id_pedido&username=$username'>detalle</td>";
			
			echo "</tr>";
			
		}
		echo "</table>";
		echo "<BR>";
		echo "<BR>";
	}

?>
<a href="logout.php"> cerrar sesion

</font>
</body>
</html>
