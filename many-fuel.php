<?php

class Car {
    private float $tank = 0;

    public function __construct() {
        $this->tank = 6;
    }

    public function getTank(): float {
        return $this->tank;
    }

    public function ride(float $kilometers): void {
        $gallons = $kilometers / 20;
        $this->tank -= $gallons;
    }
}