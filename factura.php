<?php

session_start();

$carrito=$_SESSION['carrito'];
$usuario=$_SESSION['usuario'];

if ($carrito) {
	include_once('pdf.php');
	$pdf = new PDF();
 
	$pdf->AddPage();
	//*******
	
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,'Frutería Emi');
	
	$fecha=date("d-m-Y");
	//$pdf->SetXY(50, 15);
    $pdf->SetFont('Arial','B',10);
	$pdf->Cell(120,10,utf8_decode($fecha),0, 0 , 'R' );
	//**
	
	$pdf->SetXY(10, 20);
    $pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,20,"cliente: ",0, 0 , 'L' );
		
    $pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,20,utf8_decode($usuario),0, 0 , 'L' );
	//**
	
	$pdf->SetXY(10, 25);
    $pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,20,"N. de pedido:",0, 0 , 'L' );
	
	$pedido=5;
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,20,utf8_decode($pedido),0, 0 , 'L' );
	
	
	
	//Títulos que llevará la cabecera1
	$miCabecera = array('producto', 'precio', 'cantidad');

	
	$pdf->cabeceraHorizontal($miCabecera);
	$pdf->datosHorizontal($carrito);
	$pdf->Ln();
	
	$total=45;
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,7,"TOTAL",1, 0 , 'C' );
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(24,7,$total,1, 0 , 'C' );
	
	$pdf->Ln();
	
	$total_iva=70;
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(40,7,"TOTAL CON IVA",1, 0 , 'C' );
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(24,7,$total_iva,1, 0 , 'C' );
	
	
	$pdf->Output(); //Salida al navegador
	unset($_SESSION['carrito']);
} else {
	echo "sin carrito no se imprimen facturas";
	echo "<br>";
	echo $usuario;
}
?>