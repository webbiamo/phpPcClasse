<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//legge un file testo e lo inserisce in un array riga per riga
    /*$testo = file('file.txt');  //la @ davanti a file evita di visualizzare il codice di errore

    if (!$testo) {
        echo "errore leggendo il file" ;
    } else {
        echo 'la riga 4 è : ' . $testo[3];
    } echo '<hr>'; 
    
    
    $testo2 = file("https://www.lastampa.it/");

    echo 'il titolo: ' .$testo2 [1985];

    //print_r($testo2);


    echo 'la riga 1 è: '. $testo[0] . '<br>';
    echo 'la riga 2 è: '. $testo[1] . "<br>";
    echo 'la riga 3 è: '. $testo[2] . "<br>";
    echo 'la riga 4 è: '. $testo[3] . "<br>";
    echo 'la riga 5 è: '. $testo[4] . "<br>";

*/


/*    $testo = file_get_contents('file.txt');

    echo $testo;


*/

/*
//scriviamo il file 
$data ='kjlòjlkj jlkjljkj jlkjlkjlk jlkjlkj i';
file_put_contents('nuovo.txt',$data);
*/


//esempio estremo:
//leggiamo il file binario in una stringa e poi la scriviamo in un nuovo file

/*
$immagine=file_get_contents('palme.jpg');
file_put_contents('copia-palma.jpg',$immagine);
echo $immagine;//visualizza in formato testo
*/










?>
</body>
</html>