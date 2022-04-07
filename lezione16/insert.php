<?php



include ('connessione.php');

$stringhe=['treno','pistola', 'aeroplano', 'civitavecchia'];

//die();

//contenuto della connessione
$stmt = $mysqli->prepare('INSERT INTO cars (id, model, year) VALUES (NULL, ?,?)');


$stmt->bind_param("ss", $model, $year); //qui richiamiamo i parametri 


// genero una stringa casuale 
for($i=0;$i<50000;$i++){

$stringa=$stringhe[rand(0,3)];
$stringa = str_shuffle($stringa);

$model = $stringa;
$year = rand(2000,2008);




$stmt->execute();  // esegue la insert 
}


//definire 