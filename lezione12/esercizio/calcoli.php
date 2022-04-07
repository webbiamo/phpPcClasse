<?php

class Calcoli{
    private $a;
    private $b;

    function __construct($x,$y){
        $this-> a=$x;
        $this-> b=$y;
        
    }
}


$calc = new Calcoli(5,3);
