<html>
<head>
<title>Página de autenticación</title>
</head>
<body>

<?php
	session_start();
	
	$id_producto=$_GET['id_producto'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("proyecto");
	
	$consulta="select * from productos where id_producto='".$id_producto."'";
	$resultado_consulta=mysql_query($consulta)	
		or die("La consulta falla");
		
		
	$registro=mysql_fetch_array($resultado_consulta);
	
	//si el carro ya existe lo recogemos en la variable $carrito
	if(isset($_SESSION['carrito'])) {
		$carrito=$_SESSION['carrito'];
	}
	//creamos el array con los campos deseados
	$carrito[$id_producto]=array('producto'=>$registro['producto'],'precio'=>$registro['precio'],'cantidad'=>1);
	
	//devolvemos el array carro a la nube modificado
	$_SESSION['carrito']=$carrito;
	
	header("Location:ver_carrito.php");
	
	 
?>

</body>
</html>
