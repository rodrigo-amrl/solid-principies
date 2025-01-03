<?php

namespace App\Services\AreaCalculator\Shapes;

class Square
{

    public function __construct(
        public float $width,
        public float $height
    ) {}
}
