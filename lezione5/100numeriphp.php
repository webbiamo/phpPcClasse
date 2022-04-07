<?php


echo 'stampo tutti i numeri da zero a cento<br>';


for($i=1;$i<=100;$i++){

    echo $i . '<p>vado a capo<p> ';

}

echo '<hr>';
echo 'stampo tutti i numeri da 100 a 1<br>';

for($i=100; $i>0; $i--){

    echo $i. ' ';

}

//utilizzo la funzione range 

$numeri = range(1,100);

foreach ($numeri as $numero){
    echo $numero . ' ' ;
}


// per conoscere la tipologia dei dati trattati 


echo "uso il var_dump<br><pre>";

var_dump( $numeri);
echo '<hr>';
print_r($numeri);

