<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace App\Entity;

class Product
{
    private string $name;
    
    private Category $category;
    
    private array $images;
    
    private int $quantity;
    
    private float $price;
    
    private bool $available;
=======
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
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCategory(): Category
    {
        return $this->category;
    }

    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

<<<<<<< HEAD
    public function getImages(): array
    {
        return $this->images;
    }

    public function setImages(array $images): void
    {
        $this->images = $images;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
=======
    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function isAvailable(): bool
    {
        return $this->available;
    }

    public function setAvailable(bool $available): void
    {
        $this->available = $available;
    }
<<<<<<< HEAD
=======

    public function getQuantity(): float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): void
    {
        $this->quantity = $quantity;
    }
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb
}
