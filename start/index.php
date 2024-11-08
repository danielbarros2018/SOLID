<?php

require __DIR__ . '/vendor/autoload.php';

use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();

print_r($carrinho1->exibirItens());
echo "Valor total: " . $carrinho1->exibirValorTotal();

$carrinho1->addItens("Bicicleta", 794.89);
$carrinho1->addItens("Geladeira", 1949.99);
$carrinho1->addItens("Tapete", 349.50);

echo "<br />";
print_r($carrinho1->exibirItens());
echo 'Valor total: ' . $carrinho1->exibirValorTotal();

echo "<br />";
echo 'Status: ' . $carrinho1->exibirStatus();

echo "<br />";
if ($carrinho1->confirmarPedido()) {
    echo 'Pedido realizado com sucesso!';
} else {
    echo 'Erro ao confirmar pedido!';
}
echo 'Status: ' . $carrinho1->exibirStatus();
echo "<br />";

