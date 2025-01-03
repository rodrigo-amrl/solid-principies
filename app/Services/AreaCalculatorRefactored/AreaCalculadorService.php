<?php

namespace App\Services\AreaCalculatorRefactored;


class AreaCalculadorService
{
    private $area = [];

    public function calculate($shapes)
    {
        foreach ($shapes as $shape) {
            $this->area[] = $shape->area();
        }
        return array_sum($this->area);
    }
}
