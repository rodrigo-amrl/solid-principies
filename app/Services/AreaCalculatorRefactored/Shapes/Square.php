<?php

namespace App\Services\AreaCalculatorRefactored\Shapes;

class Square implements Shape
{

    public function __construct(
        public float $width,
        public float $height
    ) {}
    public function area(): float
    {
        return $this->width * $this->height;
    }
}
