<?php

//soluzione metodo del docente 


//validazione iput 

    if (isset($argv[1]) && isset($argv[2]) && is_numeric($argv[1]) && is_numeric($argv[2])){
        echo $argv[1] + $argv[2] . "\n";
    }else{

        echo "usage: $argv[0] num1 num2\n";
    }

    /* mia soluzione 
    $somma= $argv[1] + $argv[2];
    echo "\n";
    echo $somma;
    */






?>