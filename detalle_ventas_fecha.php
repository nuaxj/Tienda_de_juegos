<html>
<head>
<title>Ventas por usuario</title>
</head>
<body background="imagenes\foto91.jpg">
<font face="Algerian">
<embed src="imagenes\TES V Skyrim Soundtrack - The Bannered Mare.mp3" autostart="true" loop=infinite volume="100"  width="0%" height="0%"> </embed>
<?php
	$id_pedido=$_GET['id_pedido'];
	$username=$_GET['username'];
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

		$consulta="SELECT * FROM pedidos,detallePedidos,productos,usuarios where pedidos.id_pedido=detallePedidos.id_pedido and detallePedidos.id_producto=productos.id_producto and usuarios.id_usuario=pedidos.id_usuario and usuarios.username='$username'";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		$num_campos=mysql_num_fields($resultado_consulta);
		
		echo "<p><b>Lista de productos</b></> <br>";
		echo "<br>";
		echo "<table border=1>";
		echo "<tr>";
		echo "<td><b>Producto</b></td>";
		echo "<td><b>Precio</b></td>";
		echo "<td><b>Cantidad</b></td>";
		echo "</tr>";
		
		while ($fila=mysql_fetch_assoc($resultado_consulta)) {
			echo "<tr>";
			
			echo "<td>".$fila['producto']."</td>";
			echo "<td>".$fila['precio']."</td>";
			echo "<td>".$fila['cantidad']."</td>";
			echo "</tr>";
			
		}
		echo "</table>";
		echo "<BR>";
		echo "<BR>";
	}

?>
<a href="consulta_ventas_fecha.php"> volver
<a href="logout.php"> cerrar sesion
</font>

</body>
</html>
