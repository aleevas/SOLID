<?php
namespace Acme\Reporting;

use Acme\Repositories\SalesRepository;
use Acme\Reporting\SalesOutputInterface;

class SalesReporter {

    /**
     * @var SalesRepository.
    **/
    private $repo;


    public function __construct(SalesRepository $repo){
        $this->repo = $repo;
        
    }

    public function beetween($startDate, $endDate, SalesOutputInterface $fromatter){

        // Get data for sales.
        $sales = $this->repo->beetwen($startDate, $endDate);

        return $fromatter->output($sales);
    }

}
