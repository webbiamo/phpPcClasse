<?php

//elencare tutti i file che sono nella dir richieste
//glob cerca per tutti i percorsi gli elementi similari indicati e restituisce array


$files = glob('richieste/*.txt');



//per debug
//print_r($files);


//stampare tutti i files e per ognuno mettere un link per leggerlo e mostrare il contenuto


echo'<ul>';
foreach($files as $file){
echo'<li><a href="scheda.php?file='.$file.'">' .$file. '</a></li>';

}







?>