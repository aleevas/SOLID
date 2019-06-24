<?php


Route::get('/', function() {
    $report = new Acme\Reporting\SalesReporter(new Acme\Repositories\SalesRepository);

    $begin = Carbon\Carbon::now()->subDays(10);
    $end  = Carbon\Corbon::now();

    return $report->between($begin, $end, new Acme\Reporting\HtmlOutput);
});
