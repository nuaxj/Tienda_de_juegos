
<?php

		$proveedor=$_POST['proveedor'];
		$domicilio=$_POST['domicilio'];
		$telefono=$_POST['telefono'];
		$email=$_POST['email'];
		$cif=$_POST['cif'];
		
		include("conexion.php");

		$consulta="INSERT INTO proveedores (proveedor,domicilio,telefono,email,cif) values ('$proveedor','$domicilio','$telefono','$email','$cif')";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		header("Location:gestion_proveedores.php");
?>
			
		


