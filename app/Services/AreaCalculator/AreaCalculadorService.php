<?php

namespace App\Services\AreaCalculator;

use App\Services\AreaCalculator\Shapes\Circle;
use App\Services\AreaCalculator\Shapes\Square;

class AreaCalculadorService
{
    private $area = [];

    public function calculate($shapes)
    {
        foreach ($shapes as $shape) {
            if ($shape instanceof Square) {
                $this->area[] = $shape->width * $shape->height;
            } elseif ($shape instanceof Circle) {
                $this->area[] = pi() * $shape->radius * $shape->radius;
            }
        }
        return array_sum($this->area);
    }
}
