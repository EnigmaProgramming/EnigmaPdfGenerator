<?php

require_once 'pdfBootstrap.php';

$pdf = new pdfGenerator(PdfFormats::F_LETTER,PdfOrientation::O_PORTRAIT);

$pdf->display();