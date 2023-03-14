<html>
<head>
<title>Gestión de ventas</title>
</head> 
<body background="imagenes\foto91.jpg">
<embed src="imagenes\The Elder Scrolls III - V Main Themes - Morrowind, Oblivion, Skyrim.mp3" autostart="true" loop=infinite volume="100"  width="0%" height="0%"> </embed>
<font face="Algerian">
<?php
	session_start();
	if($_SESSION['tipoUsuario']==1) {
		echo "Bienvenido a la pagina de administrador";
		echo "<BR>";
		$user=$_SESSION['usuario'];
		echo "USUARIO: ".$user;
		echo "<BR>";
		echo "<BR>";
		echo "<BR>";
		?>
		<a href="formulario_ventas_usuario.php"> VENTAS POR USUARIO</a> <br>
		<a href="formulario_ventas_fecha.php"> VENTAS POR FECHA</a> <br>
		<a href="formulario_ventas_pedido.php"> VENTAS POR PEDIDO</a> <br>
		<?php
		echo "<BR>";
		echo "<BR>";
	} else {
		echo "Usted no es administrador";
?>
<a href="login.html"> volver a iniciar sesión
<?php
	}
?>

<a href="logout.php"> cerrar sesion
</font>
</body>
</html>
