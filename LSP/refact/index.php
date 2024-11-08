 <?php

use App\Poligono;
use App\Poligonos\Quadrado;
use App\Poligonos\Retangulo;

require __DIR__ . '/vendor/autoload.php';

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(4);
echo "<pre>";
print_r($poligono);
echo "</pre>";
echo "<h3>Área do Retangulo: " . $poligono->getArea() . "</h3>";


$poligono = new Poligono();
$poligono->setForma(new Quadrado());
//$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(6);
echo "<h3>Área do Quadrado: " . $poligono->getArea() . "</h3>";

