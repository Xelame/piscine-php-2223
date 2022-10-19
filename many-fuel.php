<?php

class Car {
    private int $tank = 0;

    public function __construct() {
        $this->tank = 6;
    }

    public function setTank(float $gallons): self {
        $this->tank += $gallons;
        return $this;
    }

    public function getTank(): float|int {
        return $this->tank;
    }

    public function ride(float $kilometers): void {
        $gallons = $kilometers / 20;
        $this->tank -= $gallons;
    }
}