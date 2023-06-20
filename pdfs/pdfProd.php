<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        $this->Image('../resources/logoP.jpg', 40, 10, 33);
        $this->SetFont('times', 'B', 15);
        $this->Cell(80);
        $this->Cell(80, 10, 'Products', 1, 0, 'C');
        $this->Ln(40);
        $this->cell(31, 10, 'ProductID', 1, 0, 'C', 0);
        $this->cell(35, 10, 'ProductName', 1, 0, 'C', 0);
        $this->cell(31, 10, 'SupplierID', 1, 0, 'C', 0);
        $this->cell(31, 10, 'CategoryID', 1, 0, 'C', 0);
        $this->cell(36, 10, 'QuantPerUnit', 1, 0, 'C', 0);
        $this->cell(31, 10, 'UnitPrice', 1, 0, 'C', 0);
        $this->cell(33, 10, 'UnitsInStock', 1, 0, 'C', 0);
        $this->cell(35, 10, 'UnitsOnOrder', 1, 0, 'C', 0);
        $this->cell(34, 10, 'ReorderLevel', 1, 0, 'C', 0);
        $this->cell(33, 10, 'Discontinued', 1, 0, 'C', 0);
        $this->Ln(10);
    }
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
require '../bd.php';
$query = "SELECT * FROM products";
$res = $cnx->query($query);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('landscape', 'legal');
$pdf->SetFont('Times', '', 12);
while ($row = $res->fetch_assoc()) {
    $pdf->Cell(31, 10, $row['ProductID'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['ProductName'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row['SupplierID'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row['CategoryID'], 1, 0, 'C', 0);
    $pdf->Cell(36, 10, $row['QuantityPerUnit'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row['UnitPrice'], 1, 0, 'C', 0);
    $pdf->Cell(33, 10, $row['UnitsInStock'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['UnitsOnOrder'], 1, 0, 'C', 0);
    $pdf->Cell(34, 10, $row['ReorderLevel'], 1, 0, 'C', 0);
    $pdf->Cell(33, 10, $row['Discontinued'], 1, 0, 'C', 0);
    $pdf->Ln(10);
}

$pdf->Output();
