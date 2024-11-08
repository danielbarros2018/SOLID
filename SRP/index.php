<?php

require __DIR__ . '/vendor/autoload.php';

use App\CarrinhoCompra;
use App\Item;
use App\Pedido;
use App\EmailService;

echo "<h2> S. R. P. </h2>";

$pedido = new Pedido();
$item1 = new Item();
$item2 = new Item();

// ----------------------------------------------------
$item1->setDescricao("Porta copos");
$item1->setValor(4.55);

$item2->setDescricao("Lâmpada");
$item2->setValor(14.55);

// ----------------------------------------------------
echo "<h3> Pedido iniciado</h3>";
echo '<pre>';
print_r($pedido);
echo '</pre>';

// ----------------------------------------------------
$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);

// ----------------------------------------------------
echo '<h3> Pedido iniciado</h3>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

// ----------------------------------------------------
echo '<h3> Itens do carrinho</h3>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';

// ----------------------------------------------------
echo '<h3>Valor do pedido</h3>';
$totalPedido = 0;
foreach ($pedido->getCarrinhoCompra()->getItens() as $item) {
    $totalPedido += $item->getValor();
}
print_r($totalPedido);

// ----------------------------------------------------
echo '<h3>Teste: Carrinho válido</h3>';
echo $pedido->getCarrinhoCompra()->validarCarrinho();

// ----------------------------------------------------
echo '<h3>Teste: Carrinho inválido</h3>';
$pedido2 = new Pedido();
echo $pedido2->getCarrinhoCompra()->validarCarrinho();

// ----------------------------------------------------
echo '<h3>Confirmar pedido</h3>';
$pedido->confirmar();

// ----------------------------------------------------
echo '<h3>Status do pedido</h3>';
echo $pedido->getStatus();

// ----------------------------------------------------
echo '<h3>Email</h3>';
if ($pedido->getStatus() == 'confirmado') {
    echo EmailService::enviarEmail();
}
echo '<br/>';
echo '<br/>';




