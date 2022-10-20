<?php

abstract class AbstractGeometry  {
    abstract public function area(): float;

    abstract public function perimeter(): float;
}

class Rectangle extends AbstractGeometry {
    private int $width;
    private int $height;

    public function __construct(int $width, int $height) {
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

class Square extends AbstractGeometry {
    private float $side;

    public function __construct(float $side) {
        $this->side = $side;
    }

    public function area(): float {
        return $this->side * $this->side;
    }

    public function perimeter(): float {
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

    public function area(): float {
        $p = $this->perimeter() / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }

    public function perimeter(): float {
        return $this->a + $this->b + $this->c;
    }
}

echo (new Rectangle(6, 3))->area();