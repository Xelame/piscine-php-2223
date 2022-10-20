<?php

abstract class AbstractGeometry  {
    abstract public function area(): int;

    abstract public function perimeter(): int;
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
    private float $side;

    public function __construct(float $side) {
        $this->side = $side;
    }

    public function area(): int {
        return $this->side * $this->side;
    }

    public function perimeter(): int {
        return 4 * $this->side;
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

    public function area(): int {
        $p = $this->perimeter() / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }

    public function perimeter(): int {
        return $this->a + $this->b + $this->c;
    }
}

echo (new Rectangle(6, 3))->area();