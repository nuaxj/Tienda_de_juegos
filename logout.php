<?php

// iniciar la sesi�n
session_start();
$conexion=$_SESSION['conexion'];

// comprobar que el entorno de sesi�n est� definido
if(isset($_SESSION['usuario']))
{
	unset($_SESSION['usuario']);
	unset($_SESSION['tipoUsuario']);
	unset($_SESSION['conexion']);
	mysql_close($conexion);
	session_destroy();
	header("Location:login.html");
} else {
	die("S�lo los usuarios iniciados pueden derrar sesi�n <a href=login.html> Inicio");
}

?>




