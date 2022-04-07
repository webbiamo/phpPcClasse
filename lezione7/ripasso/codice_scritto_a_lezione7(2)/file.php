<?php

/*
// usiamo la funzione file per leggere l'intero contenuto del file dentro l'array
// controlliamo che non si generino errori e sopprimiamo l'output con la chiocciola
$testo =@file('file.txtr');

if(!$testo){
    echo "errore leggendo il file";
    
} else {
    echo 'la riga 4 è: ' . $testo[3];
    
}


// usiamo file per leggere tutta la home page della stampa
echo '<hr>';

$testo2 = file("https://www.lastampa.it/");


echo 'il titolo : ' . $testo2[1985];
//print_r($testo2);



// usiamo file_get_contents per leggere tutto il file in una stringa

$testo = file_get_contents('file.txt');

echo $testo;

// usiamo file_get_contents per leggere il contenuto del sito il file in una stringa




// scriviamo il file con file_put_contents

*/
$data = 'sdfdfdfd df df dsfd fd fd fd fd fd f fdse we we wew e we ';

file_put_contents('nuovo.txt',$data, FILE_APPEND);

//leggiamo i file che sono contenuti nella cartella

// esempio estremo: 
// leggiamo il file binario in una stringa e poi la scriviamo in un nuovo file

$immagine = file_get_contents('img/tropici-palma.jpg');
echo $immagine;

file_put_contents('img/copia-palma.jpg',$immagine);





