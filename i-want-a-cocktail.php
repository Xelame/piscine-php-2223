<?php

class Mojito 
{
    public float $alcoholRate = 0.05;
    public array $ingredients = ["rum", "lime", "sparkling", "water", "mint", "sugar"];
    public int $price = 8;

    public function __construct(int $price, float $alcoholRate, array $ingredients) {
        $this->price = $price;
        $this->alcoholRate = $alcoholRate;
        $this->ingredients = $ingredients;
    }
}
