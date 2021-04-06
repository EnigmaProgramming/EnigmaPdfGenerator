<?php
require_once '../pdfBootstrap.php';

$pdf = new pdfGenerator([
    'format' => PdfFormats::F_LETTER,
    'orientation' => PdfOrientation::O_PORTRAIT,
    'mode' => PdfFonts::CORE,
    //'default_font' => PdfFonts::MONO_FREE,
    ]);

    $html = file_get_contents("test.html");

    $pdf->createHtml($html);

    $pdf->outputFileToBrowser();