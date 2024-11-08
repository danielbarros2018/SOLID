<?php

namespace App;

use App\Poligonos\Retangulo;

class Quadrado extends Retangulo
{
    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
        $this->largura = $altura;
    }
    
    public function setLargura(float $largura): void
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }
}