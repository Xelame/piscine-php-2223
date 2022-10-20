<?php

abstract class AbstractGeometry  {
    abstract public function area(): float;

    abstract public function perimeter(): float;
}

class Rectangle extends AbstractGeometry {
    private float $width;
    private float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float {
        return $this->width * $this->height;
    }

    public function perimeter(): float {
        return 2 * ($this->width + $this->height);
    }
}

class Circle extends AbstractGeometry {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function area(): float {
        return pi() * $this->radius ** 2;
    }

    public function perimeter(): float {
        return 2 * pi() * $this->radius;
    }
}

class Triangle extends AbstractGeometry {
    private float $a;
    private float $b;
    private float $c;

    public function __construct(float $a, float $b, float $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function area(): float {
        $p = $this->perimeter() / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }

    public function perimeter(): float {
        return $this->a + $this->b + $this->c;
    }
}