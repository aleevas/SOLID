<?php
namespace Acme\Reporting;

class HtmlOutput implements SalesOutputInterface {

    public function output($value){
    
        return "<h1>Sales: {$value}</h1>";

    }
}
