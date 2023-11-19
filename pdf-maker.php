<?php

require_once __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$count = 1;

$html = file_get_contents("template.php");
$html_competence = file_get_contents("competenceReport.php");
$html_P5 = file_get_contents("P5Report.php");
$options = new Options;
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);
$options->set('isPhpEnabled', true);

// $html_competence = str_replace("{{ data }}" , );

$dom = new Dompdf($options);
$dom->setPaper("A4", "portrait");
$dom->loadHtml($html_P5);
$dom->render();
$dom->stream("DataPDF.pdf", ["Attachment" => 0]);
?>