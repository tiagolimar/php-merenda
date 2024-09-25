<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace App\Entity;

class Address 
{
    private string $street;
    
    private string $number;

    private string $zipcode;

    private string $district;

    private string $city;

=======
declare (strict_types=1);

namespace App\Entify;

class Address
{
    private string $street;
    private string $number;
    private string $zipcode;
    private string $district;
    private string $city;
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb
    private string $state;

    public function full(): string
    {
        return "{$this->street}, {$this->number} - {$this->district}, {$this->city}-{$this->state}";
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

<<<<<<< HEAD
=======
    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    public function setZipcode(string $zipcode): void
    {
        $this->zipcode = $zipcode;
    }

>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb
    public function getDistrict(): string
    {
        return $this->district;
    }

    public function setDistrict(string $district): void
    {
        $this->district = $district;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): void
    {
        $this->state = $state;
    }
}

<<<<<<< HEAD
=======

$endereco = new Address();

$endereco->street = 'Rua Barca Velha';
$endereco->number = '123';
$endereco->zipcode = '60326550';
$endereco->district = 'Quintino Cunha';
$endereco->city = 'Fortaleza';
$endereco->state = 'CE';

echo "Rua: {$endereco->full()}".PHP_EOL;
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb
