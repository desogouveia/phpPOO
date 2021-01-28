<?php

class ContaBancaria
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(string $banco, string $nomeTitular, string $numeroAgencia, string $numeroConta, float $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function getSaldo() : string
    {
        return $this->saldo;
    } 

    public function depositar(float $valor) : string
    {
        $this->saldo += $valor;      
        return "Depósito de ". $valor ." realizado.";  
    }

    public function saque(float $valor) : string
    {
        $this->saldo -= $valor;
        return "Saque de ". $valor ." realizado.";
    }
}

$conta = new ContaBancaria('Banco do Brasil', 'AAA', '1234', '00000-00', 0.00);

$conta2 = new ContaBancaria('Caixa Economica', 'BBB', '4321', '1111111-11', 0.00);

var_dump($conta);
var_dump($conta2);