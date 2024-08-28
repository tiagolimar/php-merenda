<?php

declare(strict_type=1);

namespace App\Entity;

class Product 
{
    public Category $category;

    public string $name; 

    public string $description;

    public string $image;
    
    public float $price;
    
    public bool $available;

    public int $quantity;
}