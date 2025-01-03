<?php

namespace App\Services;

use App\Services\Shapes\Circle;
use App\Services\Shapes\Square;

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
