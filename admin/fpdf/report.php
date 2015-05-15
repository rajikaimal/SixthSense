<?php 

	include "fpdf.php";
	$pdf = new FPDF();
	
	$pdf->AddPage();
	$pdf->SetFont("Arial","B","20");
	$pdf->Cell(0,10,"Sixth Sense Monthly Report",1,1,"C");
	$pdf->Write(20,"Monthly report of Sixth Sense org.");
	$pdf->Output();
	
	
?>