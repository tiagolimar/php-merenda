<?php

declare(strict_types=1);

namespace App\Entity;

class Address 
{
    public string $street;
    
    public string $number;

    public string $zipcode;

    public string $district;

    public string $city;

    public string $state;

    public function full(): string
    {
        return "{$this->street}, {$this->number} - {$this->district}, {$this->city}-{$this->state}";
    }
}

$enderecoAntigo = new Address(); //instancia
$enderecoAntigo->street = 'Rua Irlanda';
$enderecoAntigo->number = '51';
$enderecoAntigo->district = 'Gererau';
$enderecoAntigo->city = 'Itaitinga';
$enderecoAntigo->state = 'CE';

$endereco = new Address(); //instancia
$endereco->street = 'Rua Barca Velha';
$endereco->number = '123';
$endereco->district = 'Quintino Cunha';
$endereco->city = 'Fortaleza';
$endereco->state = 'CE';

echo "Antigo: {$enderecoAntigo->full()}".PHP_EOL;
echo "Novo: {$endereco->full()}".PHP_EOL;

