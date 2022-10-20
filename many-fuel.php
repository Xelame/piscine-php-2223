<?php

class Car {
    private float $tank = 0;

    public function setTank(float $gallons): self {
        $this->tank += $gallons;
        return $this;
    }

    public function getTank(): float {
        return $this->tank;
    }

    public function ride(float $kilometers): self {
        $gallons = ($kilometers / 20);
        $this->tank -= $gallons;
        return $this;
    }
}