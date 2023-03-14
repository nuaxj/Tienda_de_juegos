<html>
<head>
<title>Página de autenticación</title>
</head>
<body>

<?php
	session_start();
	
	$id_producto=$_POST['id_producto'];
	$cantidad=$_POST['cantidad'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("proyecto");
	
	$consulta="select * from productos where id_producto='".$id_producto."'";
	$resultado_consulta=mysql_query($consulta)	
		or die("La consulta falla");
		
		
	$registro=mysql_fetch_array($resultado_consulta);
	
	//El stock de la base de datos es superior a la cantidad pedida
	if ($registro['stock']>=$cantidad) {
		
		//si el carro ya existe lo recogemos en la variable $carrito
		if(isset($_SESSION['carrito'])) {
			$carrito=$_SESSION['carrito'];
		}
		
		//creamos el array con los campos deseados
		$carrito[$id_producto]=array('producto'=>$registro['producto'],'precio'=>$registro['precio'],'cantidad'=>$cantidad);
	
		//devolvemos el array carro a la nube modificado
		$_SESSION['carrito']=$carrito;
	
		header("Location:ver_carrito.php");
	} else {
		echo "La cantidad no puede ser superior al stock";
		?>
		<a href="catalogo.php">Seguir comprando
		<?php
	}
	
	 
?>

</body>
</html>
