<?php

// iniciar la sesión
session_start();
$conexion=$_SESSION['conexion'];

// comprobar que el entorno de sesión está definido
if(isset($_SESSION['usuario']))
{
	unset($_SESSION['usuario']);
	unset($_SESSION['tipoUsuario']);
	unset($_SESSION['conexion']);
	mysql_close($conexion);
	session_destroy();
	header("Location:login.html");
} else {
	die("Sólo los usuarios iniciados pueden derrar sesión <a href=login.html> Inicio");
}

?>




