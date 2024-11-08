<?php

namespace App\Poligonos;

class Quadrado
{
    protected float $largura;
    protected float $altura;
    
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

    public function getLargura(): float
    {
        return $this->largura;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }
}