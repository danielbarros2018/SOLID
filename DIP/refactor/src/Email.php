<?php

namespace App;

class Email implements IMensagemToken
{
    public function enviar(): void
    {
        echo "(Email) Token: 1234567890-000";
    }
}