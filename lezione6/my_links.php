<?php

// vogliamo stampare i link con una hot word che ha il nome sito del link

// variabile che contiene
 //un array di array associativi con due chiavi: titolo, url
 // voglio aggiungere un attributo ai link "tempo libero" e "lavoro"
 // in modo da stampare due tabelle distinte, una con i link del tempo libero e una del lavoro
 // IBM lavoro, La stampa e Nasa tempo libero

 $links = [
    [
        'titolo'=>'La Stampa',
        'url'=> 'https://www.lastampa.it',
        'descrizione'=>'Il sito del quotidiano La Stampa di Torino'

    ],
    [
        'titolo'=> 'NASA',
        'url'=>'https://www.nasa.gov',
        'descrizione'=>'Il sito della NASA in cui si vedono molte foto di stelle'
    ],
    [
        'titolo'=> 'IBM',
        'url'=>'https://www.ibm.com',
        'descrizione'=>'Il sito di IBM con l\'accesso ad informazioni tecniche sui prodotti' 
    ]
 ];


 echo '<ul>';
    echo('<pre>');

    print_r($links);
foreach($links as $link){
    print_r($link);
    echo '<li><a href="' . $link['url'] . '">' . $link['titolo'] . '</a></li>';
}

 echo '</ul>';
 echo '<hr>';

 echo '<table border=1>';
foreach($links as $link){
    echo '<tr>';

    echo '<td>' . $link['titolo'] . '</td>';
    echo '<td>'.$link['descrizione'].'</td>';
    // <td><a href="https://www.lastampa.it" target="_blank">https://www.lastampa.it</a></td>
    echo '<td><a href="'. $link['url'] . '" target="_blank">' . $link['url'] . '</a></td>';

    echo '</tr>';
}
 echo '</table>';














