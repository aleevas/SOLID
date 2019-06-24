<?php

namespace Acme;

class AreaCalculator {
    
    public function calculate($squares){

        foreach ($squares as $square) {
            $area[] = $square->whidth * $square->height;
        }
        return array_sum($area);

    }

}
