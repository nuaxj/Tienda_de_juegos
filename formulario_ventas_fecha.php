
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<link href="css/calendario.css" type="text/css" rel="stylesheet">
<script src="js/calendar.js" type="text/javascript"></script>
<script src="js/calendar-es.js" type="text/javascript"></script>
<script src="js/calendar-setup.js" type="text/javascript"></script>
</head>

<body background="imagenes\foto91.jpg">
<font face="Algerian">
<embed src="imagenes\TES V Skyrim Soundtrack - Secunda.mp3" autostart="true" loop=infinite volume="100"  width="0%" height="0%"> </embed>
<form action="consulta_ventas_fecha.php" method="POST">
<input type="text"  name="fecha" id="fecha" value="yyyy-mm-dd" /> 
<img src="ima/calendario.png" width="16" height="16" border="0" title="Fecha Inicial" id="lanzador">

<!-- script que define y configura el calendario--> 
<script type="text/javascript"> 
   Calendar.setup({ 
    inputField     :    "fecha",     // id del campo de texto 
     ifFormat     :     "%Y-%m-%d",     // formato de la fecha que se escriba en el campo de texto 
     button     :    "lanzador"     // el id del botón que lanzará el calendario 
}); 
</script>
<input type="submit" value="enviar">
</form>
</font>
</body>
</html>
