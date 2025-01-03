<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class SaleRepository
{
    public function sumSalesBetween($startDate, $endDate)
    {
        return DB::table('sales')->whereBetween('created_at', [$startDate, $endDate])->sum('charge') / 100;
    }
}
