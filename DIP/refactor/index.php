<?php

use App\Email;
use App\Mensageiro;
use App\Sms;
use App\Whatsapp;

require __DIR__ . '/vendor/autoload.php';

$msg = new Mensageiro(new Email());
$msg->enviarToken();

$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();

$msg3 = new Mensageiro(new Whatsapp());
$msg3->enviarToken();
