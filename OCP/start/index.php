<?php

require __DIR__ . '/vendor/autoload.php';

use App\Leitor;

// --------------------  CSV  ---------------------------
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__ . '/arquivos');
$leitorCSV->setArquivo('dados.csv');

echo '<h2> Arquivo CSV</h2>';
echo '<pre>';
print_r($leitorCSV->lerArquivo());
echo '</pre>';

// --------------------  TXT  ---------------------------
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__ . '/arquivos');
$leitorTXT->setArquivo('dados.txt');

echo '<h2> Arquivo TXT</h2>';
echo '<pre>';
print_r($leitorTXT->lerArquivo());
echo '</pre>';

