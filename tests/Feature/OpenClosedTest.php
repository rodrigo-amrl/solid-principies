<?php

namespace Tests\Feature;

use App\Services\AreaCalculator\AreaCalculadorService;
use App\Services\AreaCalculator\Shapes\Square;
use App\Services\AreaCalculatorRefactored\AreaCalculadorService as AreaCalculatorRefactored;
use App\Services\AreaCalculatorRefactored\Shapes\Square as SquareRefactored;
use Tests\TestCase;

class OpenClosedTest extends TestCase
{
    public function test_calculate_square_area(): void
    {
        $square = new Square(5, 2);
        $calculator = new AreaCalculadorService();
        $result = $calculator->calculate([$square]);

        $this->assertEquals(10, $result);
    }
    public function test_calculate_square_area_refactored(): void
    {
        $square = new SquareRefactored(5, 2);
        $calculator = new AreaCalculatorRefactored();
        $result = $calculator->calculate([$square]);

        $this->assertEquals(10, $result);
    }
}
