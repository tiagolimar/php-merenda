<?php

declare (strict_types=1);

namespace App\Entify;

class Product
{
    public string $name;
    public Category $category;
    public string $image;
    public string $description;
    public float $price;
    public bool $available;
    public float $quantity;
}