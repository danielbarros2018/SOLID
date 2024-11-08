<?php

use App\Poligonos\Quadrado;
use App\Poligonos\Retangulo;

require __DIR__ . '/vendor/autoload.php';

$retangulo = new Retangulo();
$retangulo->setAltura(5.0);
$retangulo->setLargura(15.0);

echo "Area do Retangulo: " . $retangulo->getArea() . "<br>";


$quadrado = new Quadrado();
$quadrado->setAltura(5.0);
//$quadrado->setLargura(15.0);

echo "Area do Quadrado: " . $quadrado->getArea() . "<br>";


$retangulo2 = new Quadrado();
$retangulo2->setAltura(5.0);
$retangulo2->setLargura(15.0);

echo 'LSP - Area do Retangulo: ' . $retangulo2->getArea() . '<br>';
