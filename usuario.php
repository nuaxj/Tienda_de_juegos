<html>
<head>
<title>Página de autenticación</title>
</head>
<body background="imagenes\foto91.jpg"">

<font face="Algerian">
<embed src="imagenes\Kingdom Hearts II OST - Dearly Beloved (Title Theme).mp3" autostart="true" loop=infinite volume="100"  width="0%" height="0%"> </embed>
<?php
	session_start();
	echo "Bienvenido a la página de usuario";
	echo "<BR>";
	if($_SESSION['tipoUsuario']==2)
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

		$consulta="SELECT * FROM productos";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		$num_campos=mysql_num_fields($resultado_consulta);
		
		echo "<p><b>Lista de productos</b></> <br>";
		echo "<br>";
		echo "<table border=1>";
		echo "<tr>";
		echo "<td><b>Imagen</b></td>";
		echo "<td><b>Producto</b></td>";
		echo "<td><b>Descripcion</b></td>";
		echo "<td><b>Precio</b></td>";
		echo "<td><b>Stock</b></td>";
		echo "<td><b>Acción</b></td>";
		   
		echo "</tr>";
		
		while ($fila=mysql_fetch_assoc($resultado_consulta)) {
			echo "<tr>";
			//echo "<td> <img src='imagenes/raton1.jpg' WIDTH=80 HEIGHT=80> </td>";
			echo "<td> <img src='imagenes/".$fila['foto']."' WIDTH=100 HEIGHT=100> </td>";
			echo "<td>".$fila['producto']."</td>";
			echo "<td>".$fila['descripcion']."</td>";
			echo "<td>".$fila['precio']."</td>";
			echo "<td>".$fila['stock']."</td>";
			echo "<td> <a href='agregar.php?id_producto=".$fila['id_producto']."'>comprar</td>";
			echo "<td> <a href='detalles.php?id_producto=" .$fila['id_producto']."'> detalles o informacion</td>";
			echo "</tr>";
			
		}
		echo "</table>";
		echo "<BR>";
		echo "<BR>";

?>
</font>
<a href="logout.php"> cerrar sesion


</body>
</html>
