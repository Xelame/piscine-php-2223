<?php

abstract class AbstractGeometry  {
    abstract public function area(): int|float;

    abstract public function perimeter(): int|float;
}

class Rectangle extends AbstractGeometry {
    private int $width;
    private int $height;

    public function __construct(int $width, int $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): int {
        return $this->width * $this->height;
    }

    public function perimeter(): int {
        return 2 * ($this->width + $this->height);
    }
}

class Square extends AbstractGeometry {
    private int $side;

    public function __construct(int $side) {
        $this->side = $side;
    }

    public function area(): int {
        return $this->side ** 2;
    }

    public function perimeter(): int {
        return 4 * $this->side;
    }
}

class Triangle extends AbstractGeometry {
    private int $a;
    private int $b;
    private int $c;

    public function __construct(int $a, int $b, int $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function area(): float {
        $p = $this->perimeter() / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }

    public function perimeter(): int {
        return $this->a + $this->b + $this->c;
    }
}

echo (new Triangle(6,6,6))->area();