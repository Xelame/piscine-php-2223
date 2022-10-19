<?php

class Car {
    private float $tank;

    public function __construct() {
        $this->tank = 0;
    }

    public function settank(float $gallons): self {
        $this->tank += $gallons;
        return $this;
    }

    public function getTank(): float {
        return $this->tank;
    }

    public function ride(float $kilometers): void {
        $gallons = $kilometers / 20;
        $this->tank -= $gallons;
    }
}