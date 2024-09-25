<?php

class ContaBancaria
{
    public string $cliente;
    public string $conta;
    public string $agencia;
<<<<<<< HEAD
    private float $saldo = 0;

    public function __construct(
        string $cliente,
        string $agencia
    ) {
        $this->cliente = $cliente;
        $this->agencia = $agencia;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function deposito(float $valor): void
    {
        $this->saldo += $valor;
    } 

    public function retirada(float $valor): void
    {
        if ($valor > $this->saldo) {
            throw new Exception('Saldo insuficiente');
        }

        $this->saldo -= $valor;
    }
=======
    public string $saldo;
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb
}

$nubank = new ContaBancaria();
$nubank->cliente = 'Jaime';
$nubank->agencia = '0001';
<<<<<<< HEAD
$nubank->deposito(1.90);

echo "Saldo atual: {$nubank->getSaldo()}".PHP_EOL;

$nubank->deposito(998.99);

echo "Saldo atual: {$nubank->getSaldo()}".PHP_EOL;

$nubank->retirada(5056); 

echo "Saldo atual: {$nubank->getSaldo()}".PHP_EOL;

=======
$nubank->saldo = 1.90;

echo "Saldo atual: {$nubank->saldo}".PHP_EOL;

$nubank->saldo = 1000.89;

echo "Saldo atual: {$nubank->saldo}".PHP_EOL;
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb
