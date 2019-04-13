<?php

require('fpdf/fpdf.php');

//A4 with :219mm
//defult margin :10mm each side 
//writable horizontal :219-(10*2)=189mm

$pdf = new FPDF('p','mm','A4');
$pdf ->Addpage();

//set font to arial bold 14pt
$pdf-> SetFont('Arial','B',14);

//Cell(with, height, text, border, end line, [align])

$pdf ->Cell(130, 5, 'SAMUEL GNANAM IT CETRE', 0,0);
$pdf ->Cell(59,5,'INVOICE',0,1);//end of line

//set font to arial ,reqular,12pt
$pdf ->SetFont('Arial','',12); 

$pdf ->Cell(130, 5, '[Street Address]', 0,0);
$pdf ->Cell(59,5,'',0,1);//end of line

$pdf ->Cell(130, 5, '[City, Country,ZIP]', 0,0);
$pdf ->Cell(25,5,'Date',0,0);
$pdf ->Cell(34,5,'[dd/mm/yyyy]',0,1);//end of line


$pdf ->Cell(130, 5, 'Phone [+94 123456789]', 0,0);
$pdf ->Cell(25,5,'Invoice #',0,0);
$pdf ->Cell(34,5,'[123456]',0,1);//end of line


$pdf ->Cell(130, 5, 'Fax [+94 123456789]', 0,0);
$pdf ->Cell(25,5,'Customer ID',0,0);
$pdf ->Cell(34,5,'[123456]',0,1);//end of line


//make a dummy empty cell as a vertical spacer
$pdf->Cell(189, 10, '', 0,1);//end of line
//billing Address 
$pdf->Cell(100, 5, 'Bill to', 0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10, 5, '', 0,0);
$pdf->Cell(90, 5, '[Name]', 0,1);

$pdf->Cell(10, 5, '', 0,0);
$pdf->Cell(90, 5, '[Company Name]', 0,1);

$pdf->Cell(10, 5, '', 0,0);
$pdf->Cell(90, 5, '[Address]', 0,1);

$pdf->Cell(10, 5, '', 0,0);
$pdf->Cell(90, 5, '[Phone]', 0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189, 10, '', 0,1);//end of line

//invoice Contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130, 5, 'Description',1,0);
$pdf->Cell(25, 5, 'Taxable',1,0);
$pdf->Cell(34, 5, 'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Number are right-aligned so we give 'R' after new line parameter
$pdf->Cell(130, 5, 'CCTV Camera',1,0);
$pdf->Cell(25, 5, '-',1,0);
$pdf->Cell(34, 5, '145,000.00',1,1,'R');//end of line

$pdf->Cell(130, 5, 'Superclean Dishwasher',1,0);
$pdf->Cell(25, 5, '-',1,0);
$pdf->Cell(34, 5, '450.00',1,1,'R');//end of line

$pdf->Cell(130, 5, 'Something Else',1,0);
$pdf->Cell(25, 5, '-',1,0);
$pdf->Cell(34, 5, '1000.00',1,1,'R');//end of line

//summery
$pdf->Cell(130, 5, '',0,0);
$pdf->Cell(25, 5, 'Subtotal',0,0);
$pdf->Cell(4, 5, '$',1,0);
$pdf->Cell(30, 5, '146,450.00',1,1,'R');//end of line

$pdf->Cell(130, 5, '',0,0);
$pdf->Cell(25, 5, 'Taxable',0,0);
$pdf->Cell(4, 5, '$',1,0);
$pdf->Cell(30, 5, '0',1,1,'R');//end of line

$pdf->Cell(130, 5, '',0,0);
$pdf->Cell(25, 5, 'Tax Rate',0,0);
$pdf->Cell(4, 5, '$',1,0);
$pdf->Cell(30, 5, '10%',1,1,'R');//end of line

$pdf->Cell(130, 5, '',0,0);
$pdf->Cell(25, 5, 'Total Due',0,0);
$pdf->Cell(4, 5, '$',1,0);
$pdf->Cell(30, 5, '146,450.00',1,1,'R');//end of line

$pdf->Output();
?>