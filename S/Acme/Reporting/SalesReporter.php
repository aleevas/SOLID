<?php
namespace Acme\Reporting;

use Auth, DB, Exception;

class SalesReporter {

    public function beetween($startDate, $endDate){

        // Get sales from DB.
        $sales = $this->queryDBForSalesBeetwen($startDate, $endDate);
        return $this->format($sales);
    }
    protected function queryDBForSalesBeetwen($startDate, $endDate){
        return DB::table('sales')->whereBeetwen('created_at', [$startDate, $endDate])->sum('charge')/100;
    }

    protected function format($sales){
        return "<h1>Sales: {$sales}</h1>";
        
    }
}
