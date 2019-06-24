<?php

namespace Acme;

class Square implements Shape{
    public $width;
    public $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->heigth = $height;
    }

    public function area(){
        return $this->width * $this->heigth;
    }
}
