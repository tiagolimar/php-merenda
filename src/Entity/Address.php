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

    public int $x; // -1, 1234, -9871

    public float $y; // -123.23, 0.89

    public bool $z; // true, false

    public array $w; // ['a', 'b']
}