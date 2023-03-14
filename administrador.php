<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="estilos2.css">
<title>Página de autenticación</title>
</head>
<body background="imagenes\foto91.jpg">
<embed src="imagenes\Final Fantasy VI - Terra's Theme (Orchestrated).mp3" autostart="true" loop=infinite volume="100"  width="0%" height="0%"> </embed>
<p align=center>
<font face="Algerian">
<?php

	session_start();
	if($_SESSION['tipoUsuario']==1) {
		echo "Bienvenido a la pagina de administrador";
		echo "<BR>";
		$user=$_SESSION['usuario'];
		echo "bienvenido administrador: ".$user;
		echo "<BR>";
		echo "<BR>";
		echo "<BR>";
		?>
</p>
</font>
<header>
	<nav>
		<ul>
			<li><a href="gestion_usuarios.php"  > <span class="primero"><i class="icon icon-user"></i></span> USUARIOS </a> <br></li>
			<li><a href="gestion_productos.php">  <span class="segundo"><i class="icon icon-briefcase"></i></span>PRODUCTOS </a> <br></li>
			<li><a href="gestion_proveedores.php"> <span class="tercero"><i class="icon icon-users"></i></span> PROVEEDORES </a> <br></li>
			<li><a href="gestion_ventas.php"> <span class="cuarto"><i class="icon icon-cart"></i></span> VENTAS </a> <br></li>
		</ul>		
	</nav>
</header>
		<?php
		echo "<BR>";
		echo "<BR>";
	} else {
		echo "Usted no es administrador";
?>
</br>
</br>
 <p align=center> <img src="imagenes\super.gif"> </img> </p>
</br>
</br>
<a href="login.html"> volver a iniciar sesión
<?php
	}
?>

<a href="logout.php"> cerrar sesion

</body>
</html>
