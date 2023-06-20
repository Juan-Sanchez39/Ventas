<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../resources/logoP.jpg', 40, 10, 33);
        // Arial bold 15
        $this->SetFont('times', 'B', 14);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(80, 10, 'Orders', 1, 0, 'C');
        // Salto de línea
        $this->Ln(40);
        $this->cell(18, 10, 'OrdID', 1, 0, 'C', 0);
        $this->cell(18, 10, 'CustID', 1, 0, 'C', 0);
        $this->cell(18, 10, 'EmpID', 1, 0, 'C', 0);
        $this->cell(22, 10, 'OrdDate', 1, 0, 'C', 0);
        $this->cell(21, 10, 'ReqDate', 1, 0, 'C', 0);
        $this->cell(22, 10, 'ShipDate', 1, 0, 'C', 0);
        $this->cell(19, 10, 'ShipID', 1, 0, 'C', 0);
        $this->cell(20, 10, 'ShipVia', 1, 0, 'C', 0);
        $this->cell(20, 10, 'Freight', 1, 0, 'C', 0);
        $this->cell(25, 10, 'ShipName', 1, 0, 'C', 0);
        $this->cell(30, 10, 'ShipAddress', 1, 0, 'C', 0);
        $this->cell(22, 10, 'ShipCity', 1, 0, 'C', 0);
        $this->cell(26, 10, 'ShipRegion', 1, 0, 'C', 0);
        $this->cell(28, 10, 'ShipPCode', 1, 0, 'C', 0);
        $this->cell(29, 10, 'ShipCountry', 1, 0, 'C', 0);
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
$query = "SELECT * FROM orders";
$res = $cnx->query($query);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('landscape', 'legal');
$pdf->SetFont('Times', '', 11);

while ($row = $res->fetch_assoc()) {
    $pdf->Cell(18, 10, $row['OrderID'], 1, 0, 'C', 0);
    $pdf->Cell(18, 10, $row['CustomerID'], 1, 0, 'C', 0);
    $pdf->Cell(18, 10, $row['EmployeeID'], 1, 0, 'C', 0);
    $pdf->Cell(22, 10, $row['OrderDate'], 1, 0, 'C', 0);
    $pdf->Cell(21, 10, $row['RequiredDate'], 1, 0, 'C', 0);
    $pdf->Cell(22, 10, $row['ShippedDate'], 1, 0, 'C', 0);
    $pdf->Cell(19, 10, $row['ShipperID'], 1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['ShipVia'], 1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['Freight'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['ShipName'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['ShipAddress'], 1, 0, 'C', 0);
    $pdf->Cell(22, 10, $row['ShipCity'], 1, 0, 'C', 0);
    $pdf->Cell(26, 10, $row['ShipRegion'], 1, 0, 'C', 0);
    $pdf->Cell(28, 10, $row['ShipPostalCode'], 1, 0, 'C', 0);
    $pdf->Cell(29, 10, $row['ShipCountry'], 1, 0, 'C', 0);
    $pdf->Ln(10);
}

$pdf->Output();
