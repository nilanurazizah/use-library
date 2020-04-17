<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml("Menggunakan Library Dompdf untuk Membuat Report PDF dengan Dompdf");

$dompdf->setPaper('A4', 'landscspe');

$dompdf->render();

$dompdf->stream('hasil_report.pdf');
?>