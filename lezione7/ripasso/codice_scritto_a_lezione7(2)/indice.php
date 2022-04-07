<?php

// elencare tutti i file che sono nella cartella  richieste
$files = glob('richieste/*.txt');


// per debug
//print_r($files);

// stampare tutti i file e per ognuno mettere un link per leggerlo e mostrare
// il contenuto

echo '<ul>';
foreach($files as $file){
    echo '<li><a href="scheda.php?file=' . $file . '">' . $file . '</a></li>';
  
  /*?>
    <li><a href="scheda.php?file=<?= $file ?>"></a> <?= $file ?>  </li>
    <?php  */
}


