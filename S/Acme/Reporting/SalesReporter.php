<?php
namespace Acme\Reporting;

use Acme\Repositories\SalesRepository;
use Exception;

class SalesReporter {

    /**
     * @var SalesRepository.
    **/

    private $repo;

    public function __construct(SalesRepository $repo){
        $this->repo = $repo;
        
    }

    public function beetween($startDate, $endDate){

        // Get sales from DB.
        $sales = $this->repo->beetwen($startDate, $endDate);

        return $this->format($sales);
    }
    
    protected function format($sales){
        return "<h1>Sales: {$sales}</h1>";
        
    }
}
