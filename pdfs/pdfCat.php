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
        $this->Cell(80, 10, 'Categories', 1, 0, 'C');
        // Salto de línea
        $this->Ln(40);

        $this->cell(83, 10, 'CategoryID', 1, 0, 'C', 0);
        $this->cell(83, 10, 'CategoryName', 1, 0, 'C', 0);
        $this->cell(83, 10, 'Description', 1, 0, 'C', 0);
        $this->cell(83, 10, 'Picture', 1, 0, 'C', 0);
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
$query = "SELECT * FROM categories";
$res = $cnx->query($query);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('landscape', 'legal');
$pdf->SetFont('Times', '', 12);

while ($row = $res->fetch_assoc()) {
    $pdf->Cell(83, 10, $row['CategoryID'], 1, 0, 'C', 0);
    $pdf->Cell(83, 10, $row['CategoryName'], 1, 0, 'C', 0);
    $pdf->Cell(83, 10, $row['Description'], 1, 0, 'C', 0);
    $pdf->Cell(83, 10, $row['Picture'], 1, 0, 'C', 0);
    $pdf->Ln(10);
}

$pdf->Output();
