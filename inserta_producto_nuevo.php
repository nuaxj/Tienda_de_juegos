
<?php
		$foto=$_POST['foto'];
		$producto=$_POST['producto'];
		$descripcion=$_POST['descripcion'];
		$precio=$_POST['precio'];
		$stock=$_POST['stock'];
		$id_proveedor=$_POST['id_proveedor'];
		include("conexion.php");

		$consulta="INSERT INTO  productos (id_producto,foto,producto,descripcion,precio,stock,id_proveedor) values ('NULL','$foto','$producto','$descripcion',$precio,$stock,$id_proveedor)";
	
		// Consultamos los usuarios que existen en la BD
		$resultado_consulta = mysql_query($consulta, $conexion)
			or die("Error en la consulta a la base de datos");
		
		header("Location:gestion_productos.php");
?>
			
		


