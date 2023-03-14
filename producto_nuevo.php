<html>
<head>
<title>modificacion de productos</title>
</head>
<body background="imagenes\foto91.jpg">
<font face="Algerian">
<embed src="imagenes\Saria's Song (Lost Woods) from Legend of Zelda Ocarina of Time Played on STL Ocarina.mp3" autostart="true" loop=infinite volume="100"  width="0%" height="0%"> </embed>
		<p><b> Producto nuevo </b></p> <br>
		<form action="inserta_producto_nuevo.php" method="POST">
			<table>
			<tr>
			<td>foto</td><td><input type="text" name="foto"></td>
			</tr>
			<tr>
			<td>Producto</td><td><input type="text" name="producto"></td>
			</tr>
			<tr>
			<td>Descripcion</td><td><input type="text" name="descripcion"></td>
			</tr>
			<tr>
			<td>Precio</td><td><input type="text" name="precio"></td>
			</tr>
			<tr>
			<td>Stock</td><td><input type="text" name="stock"></td>
			</tr>
			</tr>

			<tr>
			<td>id_proveedor</td><td><input type="text" name="id_proveedor"></td>
			</tr>
			<tr>
			<td><input type="submit" value="enviar"></td>
			</tr>
			</table>
		
		</form>
		
		
			
		
</font>
</body>
</html>
