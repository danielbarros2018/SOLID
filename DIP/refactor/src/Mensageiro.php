<?php

namespace App;

use App\IMensagemToken;

class Mensageiro
{
    private $canal;

    /**
     * @param $canal
     */
    public function __construct(IMensagemToken $canal)
    {
        $this->setCanal($canal);
    }


    /**
     * @return mixed
     */
    public function getCanal(): IMensagemToken
    {
        return $this->canal;
    }

    /**
     * @param mixed $canal
     */
    public function setCanal(IMensagemToken $canal): void
    {
        $this->canal = $canal;
    }
    
    public function enviarToken(): void
    {
        $this->getCanal()->enviar();
    }
}