<?php

class Mojito 
{
    public float $alcoholRate;
    public array $ingredients;
    public int $price;

    public function __construct() {
        $this->price = 8;
        $this->alcoholRate = 0.05;
        $this->ingredients = ["rum", "lime", "sparkling", "water", "mint", "sugar"];
    }
}
