<?php

namespace App\interfaces;

use Log;
use Notificacao;

interface ICadastro
{
    public function salvar();
    public function registrarLog(Log $log);
    public function enviarNotificacao(Notificacao $notificacao);
}