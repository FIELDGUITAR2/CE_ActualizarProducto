<?php 
require ("fpdf/fpdf.php");
require ("logica/Producto.php");
require ("logica/Proveedor.php");
require ("logica/TipoProducto.php");

$producto = new Producto();
$productos = $producto -> consultar();


$pdf = new FPDF("P", "mm", "Letter");
$pdf -> AddPage();
$pdf -> SetFont("Times", "B", 20);
$pdf -> Cell(196, 10, "Reporte de Productos", 0, 0, "C");

$pdf -> Image("img/logo.jpg", 10, 10, 40);

$pdf -> SetFont("Times", "B", 16);
$pdf -> SetY(50);
$pdf -> Cell(80, 10, "Nombre", 1, 0, "C");
$pdf -> Cell(30, 10, iconv("UTF-8", "iso-8859-1", "Tamaño") , 1, 0, "C");
$pdf -> Cell(30, 10, "Precio", 1, 0, "C");
$pdf -> Cell(56, 10, "Imagen", 1, 1, "C");

$pdf -> SetFont("Times", "", 14);

foreach ($productos as $p){
    $pdf -> Cell(80, 10, iconv("UTF-8", "iso-8859-1", $p -> getNombre()) , 1, 0, "L");
    $pdf -> Cell(30, 10, $p -> getTamano() , 1, 0, "C");
    $pdf -> Cell(30, 10, $p -> getPrecio(), 1, 0, "R");
    $pdf -> Cell(56, 10, "Imagen", 1, 1, "C");
}


$pdf -> Output("I", "reporte.pdf", true);


?>