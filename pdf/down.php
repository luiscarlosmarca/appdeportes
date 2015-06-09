<?php

$data = array(
	'name'   => 'luis carlos',
	'course' => 'laravel 5'

);

ob_start();
extract($data);
include 'certificate.php'
$html = ob_get_clean();

$dompdf= new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("diploma.pdf");
