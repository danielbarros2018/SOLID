<?php

namespace unit;

use App\Item;
use PHPUnit\Framework\TestCase;

class TestCarrinhoDeCompras extends TestCase
{
    public function testEstadoInicialItem()
    {
        $item = new Item();
        
        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testSetGetDescricao()
    {
        $descricao = "Carrinho de compras";
        
        $item = new Item();
        $item->setDescricao($descricao);
        
        $this->assertEquals($descricao, $item->getDescricao());
    }

    /**
     * @dataProvider dataValores
     */
    public function testSetGetValor($valor)
    {
        $item = new Item();
        $item->setValor($valor);
        
        $this->assertEquals($valor, $item->getValor());
    }

    public function testItemValido()
    {
        $item = new Item();
        $item->setValor(55.99);
        $item->setDescricao("Carrinho de compras");
        
        $this->assertTrue($item->itemValido());
    }
    
    public function testItemInvalido()
    {
        $item = new Item();
        $item->setValor(55.99);
        $this->assertFalse($item->itemValido());
    }

    public static function dataValores()
    {
        return [
            [100],
            [-2],
            [0],
            [4],
            [50],
        ];
    }
    
}
