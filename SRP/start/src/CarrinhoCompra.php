<?php

namespace App;

class CarrinhoCompra
{
    // atributos
    private $itens;
    private $status;
    private $valorTotal;
    
    // metodos
    public function __construct()
    {
        $this->itens = [];
        $this->status = "aberto";
        $this->valorTotal = 0;
    }

    public function exibirItens()
    {
        return $this->itens;
    }

    public function addItens(string $item, float $valor)
    {
        $this->itens[] = ["item" => $item, "valor" => $valor];
        $this->valorTotal += $valor;
        return true;
    }

    public function exibirValorTotal()
    {
        return $this->valorTotal;
    }

    public function exibirStatus()
    {
        return $this->status;
    }

    public function confirmarPedido()
    {
        if ($this->validarCarrinnho()) {
            $this->status = "confirmado";
            $this->enviarEmailConfirmacao();
            return true;
        }
        return false;
    }
    
    public function enviarEmailConfirmacao()
    {
        echo '<br /> ------- Enviando email de confirmação ------- <br />';
    }

    public function validarCarrinnho()
    {
        return (count($this->itens) > 0) ? true : false;
    }
}