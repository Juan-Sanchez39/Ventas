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
        $this->SetFont('times', 'B', 16);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(80, 10, 'Shippers', 1, 0, 'C');
        // Salto de línea
        $this->Ln(40);

        $this->cell(100, 10, 'ShipperID', 1, 0, 'C', 0);
        $this->cell(100, 10, 'CompanyName', 1, 0, 'C', 0);
        $this->cell(100, 10, 'Phone', 1, 0, 'C', 0);
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
$query = "SELECT * FROM shippers";
$res = $cnx->query($query);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('landscape', 'legal');
$pdf->SetFont('Times', '', 13);

while ($row = $res->fetch_assoc()) {
    $pdf->Cell(100, 10, $row['ShipperID'], 1, 0, 'C', 0);
    $pdf->Cell(100, 10, $row['CompanyName'], 1, 0, 'C', 0);
    $pdf->Cell(100, 10, $row['Phone'], 1, 0, 'C', 0);
    $pdf->Ln(10);
}

$pdf->Output();
