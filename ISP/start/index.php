<?php


use App\dao\ContratoModel;
use App\dao\LeadModel;
use App\dao\UsuarioModel;

require __DIR__ . '/vendor/autoload.php';

$contratoModel = new ContratoModel();
$leadModel = new LeadModel();
$usuarioModel = new UsuarioModel();

print_r($contratoModel);
echo "<br>";
print_r($leadModel);
echo "<br>";
print_r($usuarioModel);
echo "<br>";