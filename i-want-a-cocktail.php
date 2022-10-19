<?php

class Mojito 
{
    public float $alcoholRate;
    public array $ingredients;
    public int $price;

    public function __construct() {
        $this->price = 8;
        $this->alcoholRate = 0.15;
        $this->ingredients = 
            [
                'lime' => 1,
                'sugar' => 1,
                'mint' => 1,
                'rum' => 1,
                'soda' => 1
            ];
    }
}