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
        $this->SetFont('times', 'B', 13);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(80, 10, 'Employees', 1, 0, 'C');
        // Salto de línea
        $this->Ln(40);

        $this->cell(12, 10, 'ID', 1, 0, 'C', 0);
        $this->cell(19, 10, 'LName', 1, 0, 'C', 0);
        $this->cell(19, 10, 'FName', 1, 0, 'C', 0);
        $this->cell(15, 10, 'Title', 1, 0, 'C', 0);
        $this->cell(28, 10, 'TOfCourtesy', 1, 0, 'C', 0);
        $this->cell(20, 10, 'BirthDate', 1, 0, 'C', 0);
        $this->cell(20, 10, 'HireDate', 1, 0, 'C', 0);
        $this->cell(20, 10, 'Address', 1, 0, 'C', 0);
        $this->cell(15, 10, 'City', 1, 0, 'C', 0);
        $this->cell(16, 10, 'Region', 1, 0, 'C', 0);
        $this->cell(24, 10, 'PostalCode', 1, 0, 'C', 0);
        $this->cell(20, 10, 'Country', 1, 0, 'C', 0);
        $this->cell(26, 10, 'HomePhone', 1, 0, 'C', 0);
        $this->cell(21, 10, 'Extension', 1, 0, 'C', 0);
        $this->cell(20, 10, 'Photo', 1, 0, 'C', 0);
        $this->cell(20, 10, 'Notes', 1, 0, 'C', 0);
        $this->cell(22, 10, 'ReportsTo', 1, 0, 'C', 0);
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
$query = "SELECT * FROM employees";
$res = $cnx->query($query);
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('landscape', 'legal');
$pdf->SetFont('Times', '', 10);
while ($row = $res->fetch_assoc()) {
    $pdf->Cell(12, 10, $row['EmployeeID'], 1, 0, 'C', 0);
    $pdf->Cell(19, 10, $row['LastName'], 1, 0, 'C', 0);
    $pdf->Cell(19, 10, $row['FirstName'], 1, 0, 'C', 0);
    $pdf->Cell(15, 10, $row['Title'], 1, 0, 'C', 0);
    $pdf->Cell(28, 10, $row['TitleOfCourtesy'], 1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['BirthDate'], 1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['HireDate'], 1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['Address'], 1, 0, 'C', 0);
    $pdf->Cell(15, 10, $row['City'], 1, 0, 'C', 0);
    $pdf->Cell(16, 10, $row['Region'], 1, 0, 'C', 0);
    $pdf->Cell(24, 10, $row['PostalCode'], 1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['Country'], 1, 0, 'C', 0);
    $pdf->Cell(26, 10, $row['HomePhone'], 1, 0, 'C', 0);
    $pdf->Cell(21, 10, $row['Extension'], 1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['Photo'], 1, 0, 'C', 0);
    $pdf->Cell(20, 10, $row['Notes'], 1, 0, 'C', 0);
    $pdf->Cell(22, 10, $row['ReportsTo'], 1, 0, 'C', 0);
    $pdf->Ln(10);
}

$pdf->Output();
