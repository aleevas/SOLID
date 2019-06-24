<?php
namespace Acme\Repositories;

use DB;

class SalesRepository {
    public function beetwen($startDate, $endDate){
        return DB::table('sales')->whereBeetwen('created_at', [$startDate, $endDate])->sum('charge')/100;
    }
}