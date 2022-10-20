<?php

class Car {
    private int $tank = 0;

    public function setTank(float $gallons): self {
        $this->tank += $gallons;
        return $this;
    }

    public function getTank(): int {
        return $this->tank;
    }

    public function ride(float $kilometers): void {
        $gallons = $kilometers / 20;
        $this->tank -= $gallons;
    }
}