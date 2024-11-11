<?php

namespace App;

class Sms implements IMensagemToken
{
    public function enviar(): void
    {
        echo '(SMS) Token: 1234567890-000';
    }
}