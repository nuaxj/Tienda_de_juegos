


<?php
session_start();

$id_producto=$_GET['id_producto'];
$carrito=$_SESSION['carrito'];

if (isset($carrito)) {
	unset($carrito[$id_producto]);
	$_SESSION['carrito']=$carrito;
	header("Location:ver_carrito.php");
}
?>