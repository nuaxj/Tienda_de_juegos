
<?php

		$id_producto=$_POST['id_producto'];
		$producto=$_POST['producto'];
		$descripcion=$_POST['descripcion'];
		$precio=$_POST['precio'];
		$stock=$_POST['stock'];
		$imagen=$_POST['imagen'];
		
		
		// Estableciendo la conexión con MYSQL
		$conexion = mysql_connect("localhost","root","")
			or die("Error de conexión con el servidor");

		// Abriendo la base de datos sesiones		
		mysql_select_db("proyecto",$conexion)
			or die("Error de conexión con la base de datos");

		$consulta="UPDATE productos SET producto='$producto', descripcion='$descripcion', precio=$precio, stock=$stock , foto='$imagen' where id_producto=$id_producto;";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		
		
		header("Location:gestion_productos.php");
	?>
			
		


