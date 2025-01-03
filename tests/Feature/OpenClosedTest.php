<?php

namespace Tests\Feature;

use App\Services\AreaCalculadorService;
use App\Services\Shapes\Square;
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
}
