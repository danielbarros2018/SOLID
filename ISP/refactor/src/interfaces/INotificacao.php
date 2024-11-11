<?php

namespace App\interfaces;

use App\components\Notificacao;

interface INotificacao
{
    public function enviarNotificacao(Notificacao $notificacao);
}