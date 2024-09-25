<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace App\Entity;

class Category 
{
    private string $description;

    private string $image;

    public function __construct(
        private string $name
    ) {
    }

=======
declare (strict_types=1);

namespace App\Entify;

class Category
{
    private string $name;
    private string $description;
    private string $image;

>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb
