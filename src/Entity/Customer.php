<?php

<<<<<<< HEAD
declare(strict_types=1);

namespace App\Entity;
=======
declare (strict_types=1);

namespace App\Entify;
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb

class Customer
{
    private string $name;
<<<<<<< HEAD
    
    private Address $address;

    private string $email;

    private string $phone;

    private string $photo;

    private bool $status;

    public function __construct(string $name, string $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }
=======
    private Address $address;
    private string $image;
    private string $email;
    private string $phone;
    private string $type;
    private string $status;
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

<<<<<<< HEAD
    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
=======
    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

<<<<<<< HEAD
    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

    public function isStatus(): bool
=======
    public function getAddress(): Address
    {
        return $this->address;
    }

    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getStatus(): string
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb
    {
        return $this->status;
    }

<<<<<<< HEAD
    public function setStatus(bool $status): void
=======
    public function setStatus(string $status): void
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb
    {
        $this->status = $status;
    }
}
