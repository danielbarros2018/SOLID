<?php

namespace App;

use App\CarrinhoCompra;

class Pedido
{
    private string $status;
    private CarrinhoCompra $carrinhoCompra;
    private int $valorPedido;

    /**
     * @param string $status
     * @param CarrinhoCompra $carrinhoCompra
     */
    public function __construct()
    {
        $this->status = 'aberto';
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->valorPedido = 0;
    }

    public function getCarrinhoCompra(): CarrinhoCompra
    {
        return $this->carrinhoCompra;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function confirmar()
    {
        if ($this->getCarrinhoCompra()->validarCarrinho()) {
            $this->setStatus('confirmado');
            return true;
        }
        return false;
    }

}