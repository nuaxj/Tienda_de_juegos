<html>
<head>
<title>Gestión de productos</title>
</head>
<body background="imagenes\foto91.jpg">
<embed src="imagenes\Saria's Song (Lost Woods) from Legend of Zelda Ocarina of Time Played on STL Ocarina.mp3" autostart="true" loop=infinite volume="100"  width="0%" height="0%"> </embed>
<font face="Algerian">
<P><B>GESTIÓN DE PRODUCTOS</B></P><BR>
<?php
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
		
		echo "<table border=1>";
		echo "<tr>";
		echo "<td><b>Imagen</b></td>";
		echo "<td><b>Producto</b></td>";
		echo "<td><b>Descripcion</b></td>";
		echo "<td><b>Precio</b></td>";
		echo "<td><b>Stock</b></td>";
		echo "<td><b>Modificar</b></td>";
		echo "<td><b>Eliminar</b></td>";
		   
		echo "</tr>";
		
		while ($fila=mysql_fetch_array($resultado_consulta)) {
			echo "<tr>";
			for($i=1; $i<$num_campos; $i++) {
				echo "<td> $fila[$i] </td>";
			}
			$id_producto=$fila[0];
			echo "<td> <a href='modificar_producto.php?id_producto=$id_producto'> modificar </a></td>";
			echo "<td> <a href='eliminar_producto.php?id_producto=$id_producto'> eliminar </a></td>";
			echo "</tr>";
			
		}
		echo "</table>";
		echo "<BR>";
		echo "<a href='producto_nuevo.php'> producto nuevo </a>";
		echo "<BR>";

?>
<a href="logout.php"> cerrar sesion
</font>


</body>
</html>
