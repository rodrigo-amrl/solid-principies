<?php

namespace App\Reporting;

use App\Repositories\SaleRepository;

class SalesReporterRefactored
{
    public function __construct(
        private SaleRepository $saleRepository
    ) {}
    public function between($startDate, $endDate, SalesOutputInterface $formatter)
    {
        $sales = $this->saleRepository->sumSalesBetween($startDate, $endDate);
        return $formatter->output($sales);
    }
}
