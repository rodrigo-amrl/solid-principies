<?php

namespace Tests\Feature;

use App\Models\User;
use App\Reporting\HtmlOutput;
use App\Reporting\SalesReporter;
use App\Reporting\SalesReporterRefactored;
use App\Repositories\SaleRepository;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class SingleResponsibilityTest extends TestCase
{
    public function test_sum_sales(): void
    {
        Auth::login(User::first());
        $report = new SalesReporter();
        $begin = Carbon::now()->subDays(10);
        $end = Carbon::now();

        $result = $report->between($begin, $end);
        $this->assertStringContainsString('<h1>Sales', $result);
    }
    public function test_sum_sales_refactored(): void
    {
        Auth::login(User::first());
        $report = new SalesReporterRefactored(new SaleRepository);
        $begin = Carbon::now()->subDays(10);
        $end = Carbon::now();

        $result = $report->between($begin, $end, new HtmlOutput);
        $this->assertStringContainsString('<h1>Sales', $result);
    }
}
