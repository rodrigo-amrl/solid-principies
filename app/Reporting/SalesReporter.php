<?php

namespace App\Reporting;

use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SalesReporter
{

    public function between($startDate, $endDate)
    {
        if (!Auth::check()) throw new Exception('Authentication required for reporting');

        $sales = $this->queryDBForSalesBetween($startDate, $endDate);
        return $this->format($sales);
    }
    protected function queryDBForSalesBetween($startDate, $endDate)
    {
        return DB::table('sales')->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
    }
    protected function format($sales)
    {
        return "<h1>Sales $sales</h1>";
    }
}
