<?php

use App\Mensageiro;

require __DIR__ . '/vendor/autoload.php';

$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

$msg->setCanal('sms');
$msg->enviarToken();

