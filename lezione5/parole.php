<?php

$articoli=['il','lo','la','i','gli','le'];
$animali =['cane', 'struzzo', 'pecora', 'conigli', 'scimpanzè', 'giraffe'];


$dim = count($articoli);

for($i=0; $i < $dim; $i++) {

    echo $articoli[$i]. ' ' .$animali[$i] . '<br>' ;

//esempio con printf()

printf("%s %s<br>", $articoli[$i], $animali[$i]);


}




