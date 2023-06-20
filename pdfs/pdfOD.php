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
        $this->Cell(80, 10, 'Order Details', 1, 0, 'C');
        // Salto de línea
        $this->Ln(40);

        $this->cell(66, 10, 'OrderID', 1, 0, 'C', 0);
        $this->cell(67, 10, 'ProductID', 1, 0, 'C', 0);
        $this->cell(67, 10, 'UnitPrice', 1, 0, 'C', 0);
        $this->cell(67, 10, 'Quantity', 1, 0, 'C', 0);
        $this->cell(67, 10, 'Discount', 1, 0, 'C', 0);
        // Salto de línea
        $this->Ln(10);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
//Conexion a la Base de Datos
require '../bd.php';
$query = "SELECT * FROM orderdetails";
$res = $cnx->query($query);
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('landscape', 'legal');
$pdf->SetFont('Times', '', 12);

while ($row = $res->fetch_assoc()) {
    $pdf->Cell(66, 10, $row['OrderID'], 1, 0, 'C', 0);
    $pdf->Cell(67, 10, $row['ProductID'], 1, 0, 'C', 0);
    $pdf->Cell(67, 10, $row['UnitPrice'], 1, 0, 'C', 0);
    $pdf->Cell(67, 10, $row['Quantity'], 1, 0, 'C', 0);
    $pdf->Cell(67, 10, $row['Discount'], 1, 0, 'C', 0);
    $pdf->Ln(10);
}

$pdf->Output();
