
<?php

		$id_proveedor=$_POST['id_proveedor'];
		$proveedor=$_POST['proveedor'];
		$domicilio=$_POST['domicilio'];
		$telefono=$_POST['telefono'];
		$email=$_POST['email'];
		$cif=$_POST['cif'];
		
		
		// Estableciendo la conexión con MYSQL
		$conexion = mysql_connect("localhost","root","")
			or die("Error de conexión con el servidor");

		// Abriendo la base de datos sesiones		
		mysql_select_db("proyecto",$conexion)
			or die("Error de conexión con la base de datos");

		$consulta="UPDATE proveedores SET proveedor='$proveedor', domicilio='$domicilio', telefono='$telefono', email='$email' , cif='$cif' where id_proveedor=$id_proveedor;";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		
		
		header("Location:gestion_proveedores.php");
	?>
			
		


