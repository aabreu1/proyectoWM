<?php
include_once('mysql-config.php');
require('fpdf/fpdf.php');


	$registros=mysqli_query($conexion,"select username,pass,name,email,address,phone from user") or
	die("Problemas con la conexión");

class PDF extends FPDF{
	function header(){
		$this->SetFont('Arial','B',12);
		//$this->Image('img/logo-urbe.jpg',10,10,30,25);
		$this->Cell(0,5,utf8_decode("Te lo Armo.com"),0,1,"R");
		$this->Cell(0,5,"J-564864864",0,1,"R");
		$this->Ln(20);
	}
	function footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','I','10');
		$this->Cell(0,5,$this->PageNo()."/{nb}",0,1,"C");
	}
}

$pdf = new PDF('P','mm','Letter');


$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','B','24');
$pdf->Cell(0,16,utf8_decode('Listado de Usuarios'),0,1,'C');

$pdf->Ln(5);

$pdf->SetTextColor(250,250,250);
$pdf->SetFillColor(0,128,255);
$pdf->SetFont('Arial','B','12');
$pdf->Cell(0,10,"Usuarios",1,1,'C',true);

$pdf->Ln(5);

while($reg=mysqli_fetch_array($registros)){

	$pdf->SetTextColor(0,0,0);
	$pdf->Cell(98,10,"Usuario: ".$reg['username'],1,0);
	$pdf->Cell(98,10,"Pass: ".$reg['pass'],1,1);
	$pdf->Cell(98,10,utf8_decode("Nombre: ".$reg['name']),1,0);
	$pdf->Cell(98,10,"Correo: ".$reg['email'],1,1);
	$pdf->Cell(76,10,utf8_decode("Telefono Celular: ".$reg['phone']),1,0);
	$pdf->SetFillColor(255,255,255);
	$pdf->MultiCell(0,10,utf8_decode("Direccion: ".$reg['address']),1,1,'L',true);
	
	$pdf->Ln(10);
}

$pdf->Output("nombreFichero.pdf", "I");

?>