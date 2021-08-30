<?php

declare(strict_types=1);

class ContaBancaria
{
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        float $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function obterSaldo() : string
    {
        return 'Seu saldo atual é ' . $this->saldo;
    }

    public function depositar(float $valor) : string
    {
        $this->saldo += $valor;
        return 'Depósito de R$' . $valor;
    }
    public function sacar(float $valor) : string
    {
        $this->saldo -= $valor;
        return 'Saque de R$' . $valor;
    }
}

$conta = new ContaBancaria(
    'Banco do Brasil',
    'Heitor Miranda',
    '1610-1',
    '114026-4',
    0
);

echo $conta->obterSaldo();

echo '<br>';

$conta->depositar(300);

echo '<br>';

echo $conta->obterSaldo();

echo '<br>';

$conta->sacar(100);

echo '<br>';

echo $conta->obterSaldo();