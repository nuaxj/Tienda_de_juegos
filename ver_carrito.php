<html> 
<head> 
<title>PRODUCTOS AGREGADOS AL CARRITO</title> 
<?php
session_start();
if (isset($_SESSION['usuario'])) {
		echo "<i>Bienvenido  ".$_SESSION['usuario']."</i>";
		?>
        <a href="logout.php"/>Cerrar Sesion</a>
<?php	}else { ?>
<form name="logearse" action="inicio_sesion.php" method="POST">
	USUARIO: <input type="text" name="usuario">
	CONTRASEÑA: <input type="password" name="contrasena">
	<input type="submit" value="enviar">
</form>
<?php } ?>


</head> 
 
<body> 
 
<h1 align="center">Carrito</h1> 
<?php
$carrito=$_SESSION['carrito'];
if($carrito){ 
?> 
	<table align="center"> 
		<tr> 
			<td width="200"><strong>PRODUCTO</strong></td> 
			<td align="center"><strong>PRECIO</strong></td> 
			<td align="center" width="200"><strong>CANTIDAD</strong></td>
			<td align="center" width="200"><strong>SUBTOTAL</strong></td>
			<td align="center">Acción</td> 
		</tr> 
 
		<?php 
		$total=0;
		foreach($carrito as $k => $v){ 
		?> 
			<form name="f<?php echo $v['id_producto'] ?>" method="post" action="actualizar.php"> 
			<tr> 
				<td width="170"><strong><?php echo $v['producto'] ?></strong></td> 
				<td align="center" width="77"><strong><?php echo $v['precio'] ?></strong></td> 
				<td align="center" width="136" align="center"> 
					<input type="text" name="cantidad" value="<?php echo $v['cantidad'];?>" size="8">
					<input type="hidden" name="id_producto" value="<?php echo $k;?>">  
					<input type="submit" name="actualizar" value="actualizar" size="8"> </td>
				<td align="center"><strong><?php
								$subtotal=$v['precio'] *  $v['cantidad'];
								echo $subtotal;
								$total=$subtotal + $total;?></strong></td> 
				<td align="center"> 
					<a href="quitar.php?id_producto=<?php echo $k; ?>"> Borrar </a></td> 
					
				
			</tr>
		
		</form>
	
	
 
		<?php }?> 
 
	</table> 
	<br>
	<br>
	
	<table align="center"> 
		<tr> 
			<td width="200"></td> 
			<td align="center"></td> 
			<td align="center" width="200"><strong>TOTAL</strong></td>
			<td align="center" width="200"><strong><?php echo $total; ?></strong></td>
			<td align="center"></td> 
		</tr> 
	</table>	
	<?php
		$total_iva=$total*1.21;
	?>
	<table align="center"> 
		<tr> 
			<td width="200"></td> 
			<td align="center"></td> 
			<td align="center" width="200"><strong>TOTAL CON IVA</strong></td>
			<td align="center" width="200"><strong><?php echo $total_iva; ?></strong></td>
			<td align="center"></td> 
		</tr> 
	</table>
	
	<br>
	<br>

	<table align="center"> 
		<tr> 
			<td width="200"><a href="usuario.php">Seguir comprando </a></td> 
			<td width="200"><a href="confirmar_compra.php">Confirmar compra </a></td>
		</tr>
	</table>
	
	
	

 
<?php }else{ ?> 
	<p align="center"> No hay productos seleccionados <a href="usuario.php"> Volver a inicio </a> 
 <?php }?> 
</p> 
</body> 
</html> 