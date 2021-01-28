<?php

declare(strict_types=1);

class Venda
{
    private $data;
    private string $produto;
    private int $quantidade;
    private float $valorTotal;

    public function __construct($data, string $produto, int $quantidade, float $valorTotal)
    {
        $this->data = $data;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->valorTotal = $valorTotal;
    }

    public function showVenda()
    {
        echo "Data da Compra: ". $this->data;
        echo PHP_EOL;
        echo "Produto: ". $this->produto;
        echo PHP_EOL;
        echo "Quantidade: ". $this->quantidade;
        echo PHP_EOL;
        echo "Valor total: ". $this->valorTotal;
    }
}

$venda1 = new Venda(28/01/2021, 'Toddy', 5, 5.00);

$venda1->showVenda();