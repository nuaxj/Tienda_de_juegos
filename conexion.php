
<?php

		// Estableciendo la conexi�n con MYSQL
		$conexion = mysql_connect("localhost","root","")
			or die("Error de conexi�n con el servidor");

		// Abriendo la base de datos sesiones		
		mysql_select_db("proyecto_final",$conexion)
			or die("Error de conexi�n con la base de datos");
		
?>
			
		


