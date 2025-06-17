<?php

namespace App;

class Product
{
    public function __construct(
        private string $name,
        private float $price
    ) {
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice($price): self
    {
        $this->price = $price;
        return $this;
    }
}
