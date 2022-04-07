<?php

// qui metteremo il codice  per riconoscere devo ricevere i dati
if ($_SERVER['REQUEST_METHOD']=='POST'){

    $filename = 'richieste/' . uniqid('',true) . '.txt';
   // echo "devo elaborare i dati: " ;
  // echo  $_REQUEST['q'];
  // print_r($_REQUEST);  //per debug
  // vogliamo salvare questi dati in un file 
  
  $content = 'nome vale:' .   $_REQUEST['nome']  .  ' cognome vale:' .   $_REQUEST['cognome']."\n";
  file_put_contents($filename, $content, FILE_APPEND);

  echo "dati ricevuti";

} else {

?>
    <form action="form.php"  method="post">
    inserisci dati:    nome <input type="text" name="nome" >
    cognome <input type="text" name="cognome" >
        <input type="submit">

    </form>

<?php
}

