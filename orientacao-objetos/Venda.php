<?php

class Venda
{
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;

    public function __construct($data, $produto, $quantidade, $valorTotal)
    {   
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function mostrarVenda()
    {
        echo 'A venda foi realizada no dia ' . $this->data . '.';
        echo '<br>';
        echo 'Foi vendido ' . $this->quantidade . ' unidades do produto ' . $this->produto . '.';
        echo '<br>';
        echo 'O valor total da venda foi de R$' . $this->valorTotal . '.';
    }
}

$venda = new Venda(
    '29/08/2021',
    'Mouse',
    '2',
    200
);

$venda->mostrarVenda();