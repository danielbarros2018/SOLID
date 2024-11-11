<?php

namespace App;


class Mensageiro
{
    private $canal;

    /**
     * @return mixed
     */
    public function getCanal()
    {
        return $this->canal;
    }

    /**
     * @param mixed $canal
     */
    public function setCanal($canal): void
    {
        $this->canal = $canal;
    }
    
    public function enviarToken(): void
    {
        $class = '\App\\' . ucfirst($this->getCanal());
        echo "<br>";
        echo $class;
        echo "<br>";
        $obj = new $class();
        $obj->enviar();
    }
}