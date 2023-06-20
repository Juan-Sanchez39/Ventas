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
        $this->SetFont('times', 'B', 15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(80, 10, 'Suppliers', 1, 0, 'C');
        // Salto de línea
        $this->Ln(40);

        $this->cell(20, 10, 'SuppID', 1, 0, 'C', 0);
        $this->cell(37, 10, 'CompanyName', 1, 0, 'C', 0);
        $this->cell(35, 10, 'ContactName', 1, 0, 'C', 0);
        $this->cell(31, 10, 'ContactTitle', 1, 0, 'C', 0);
        $this->cell(26, 10, 'Address', 1, 0, 'C', 0);
        $this->cell(23, 10, 'City', 1, 0, 'C', 0);
        $this->cell(26, 10, 'Region', 1, 0, 'C', 0);
        $this->cell(30, 10, 'PostalCode', 1, 0, 'C', 0);
        $this->cell(26, 10, 'Country', 1, 0, 'C', 0);
        $this->cell(26, 10, 'Phone', 1, 0, 'C', 0);
        $this->cell(26, 10, 'Fax', 1, 0, 'C', 0);
        $this->cell(31, 10, 'HomePage', 1, 0, 'C', 0);
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
$query = "SELECT * FROM suppliers";
$res = $cnx->query($query);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('landscape', 'legal');
$pdf->SetFont('Times', '', 12);

while ($row = $res->fetch_assoc()) {
    $pdf->Cell(20, 10, $row['SupplierID'], 1, 0, 'C', 0);
    $pdf->Cell(37, 10, $row['CompanyName'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['ContactName'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row['ContactTitle'], 1, 0, 'C', 0);
    $pdf->Cell(26, 10, $row['Address'], 1, 0, 'C', 0);
    $pdf->Cell(23, 10, $row['City'], 1, 0, 'C', 0);
    $pdf->Cell(26, 10, $row['Region'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['PostalCode'], 1, 0, 'C', 0);
    $pdf->Cell(26, 10, $row['Country'], 1, 0, 'C', 0);
    $pdf->Cell(26, 10, $row['Phone'], 1, 0, 'C', 0);
    $pdf->Cell(26, 10, $row['Fax'], 1, 0, 'C', 0);
    $pdf->Cell(31, 10, $row['HomePage'], 1, 0, 'C', 0);
    $pdf->Ln(10);
}

$pdf->Output();
