<?php

require __DIR__ . '/vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Mpdf\Mpdf;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('log_app.log', Level::Warning));

// add records to the log
$log->warning('Alerta aplicacao');
$log->error('Erro aplicacao', );

$mpdf = new Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
// $mpdf->Output();
$mpdf->OutputFile('saida.pdf');