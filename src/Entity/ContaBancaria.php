<?php

class ContaBancaria
{
    public string $cliente;
    public string $conta;
    public string $agencia;
    public string $saldo;
}

$nubank = new ContaBancaria();
$nubank->cliente = 'Jaime';
$nubank->agencia = '0001';
$nubank->saldo = 1.90;

echo "Saldo atual: {$nubank->saldo}".PHP_EOL;

$nubank->saldo = 1000.89;

echo "Saldo atual: {$nubank->saldo}".PHP_EOL;