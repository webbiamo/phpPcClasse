<?php


/*


//scrivere una funzione che calcoli il massimo tra gli elementi ricevuti in numero
//non noto usando la sintassi variadic


function massimo(int ...$numeri){
    return max($numeri);

}

echo 'il massimo √®:' . massimo (4,5,6) . '<br>';

//questa riga restituir√† un errore 

echo 'il massimo √®:' . massimo (4,-1,6,'gatto') . '<br>';


*/


$testo='non saprei veramente come contare tutte queste parole spero sinceramente che ci sia un modo per poterlo fare altrimenti i pc a che cosa servono?';

function ricorrenze($testo){
    $parole=explode(' ',$testo);
    return $parole;
}

print_r(ricorrenze($testo));






