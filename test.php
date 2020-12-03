<?php

require_once './configs/config.php';
require_once './system/pdfGenerator.php';

$pdf = new pdfGenerator();

$pdf->display();