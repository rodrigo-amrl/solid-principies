<?php

namespace App\Services\AreaCalculatorRefactored\Shapes;

class Circle implements Shape
{

    public function __construct(
        public float $radius
    ) {}

    public function area(): float
    {
        return pi() * pow($this->radius, 2);
    }
}
