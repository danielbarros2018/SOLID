<?php

namespace App;

class Whatsapp implements IMensagemToken
{
    public function enviar(): void
    {
        echo '(Whatsapp) Token: 1234567890-000';
    }
}