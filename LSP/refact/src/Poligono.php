<?php

namespace App;

class Poligono
{
    private object $forma;

    /**
     * @return mixed
     */
    public function getForma(): object
    {
        return $this->forma;
    }

    /**
     * @param mixed $forma
     */
    public function setForma(object $forma): void
    {
        $this->forma = $forma;
    }
    
    public function getArea(): float
    {
        return $this->getForma()->getAltura() * $this->getForma()->getLargura();
    }
    
}