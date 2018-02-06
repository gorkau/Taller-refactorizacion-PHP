<?php
require('vendor/autoload.php');

use App\ConversorCSV;

$conversor = new ConversorCSV;

$salida = $conversor->convertirFichero('diademas.csv', 1);

print_r($salida);