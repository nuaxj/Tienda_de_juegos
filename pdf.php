<?php
require('fpdf/fpdf.php');
 
class PDF extends FPDF
{
    function cabeceraVertical($cabecera)
    {
        $this->SetXY(10, 10);
        $this->SetFont('Arial','B',10);
        foreach($cabecera as $columna)
        {
            //Par�metro con valor 2, hace que la cabecera sea vertical
            $this->Cell(30,7,utf8_decode($columna),1, 2 , 'L' );
        }
    }
 
    function datosVerticales($datos)
    {
        $this->SetXY(40, 10); //40 = 10 posici�nX_anterior + 30ancho Celdas de cabecera
        $this->SetFont('Arial','',10); //Fuente, Normal, tama�o
        foreach($datos as $columna)
        {
            $this->Cell(30,7,utf8_decode($columna),1, 2 , 'L' );
        }
    }
 
    function cabeceraHorizontal($cabecera)
    {
        $this->SetXY(10, 50);
        $this->SetFont('Arial','B',10);
        foreach($cabecera as $fila)
        {
            //Atenci�n!! el par�metro valor 0, hace que sea horizontal
			//$this->Cell(70,7,0, 0 , 'C' );
            $this->Cell(24,7,utf8_decode($fila),1, 0 , 'C' );
        }
    }
 
    function datosHorizontal($datos)
    {
        $this->SetXY(10,57); // 77 = 70 posici�nY_anterior + 7 altura de las de cabecera
        $this->SetFont('Arial','',10); //Fuente, normal, tama�o
        foreach($datos as $fila)
        {
            //Atenci�n!! el par�metro valor 0, hace que sea horizontal
			//$this->Cell(70,7,0, 0 , 'C' );
            $this->Cell(24,7,utf8_decode($fila['nombre']),1, 0 , 'C' );
			$this->Cell(24,7,utf8_decode($fila['precio_venta']),1, 0 , 'C' );
			$this->Cell(24,7,utf8_decode($fila['cantidad']),1, 0 , 'C' );
			$this->Ln();
			
        }
    }
 

} // FIN 