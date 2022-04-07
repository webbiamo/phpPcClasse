<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<?php

//qui mettermo il codice per riconoscere devo ricevere i dati 
if ($_SERVER['REQUEST_METHOD']=='POST'){

    $filename='richieste/' . uniqid('',true) . '.txt';
 
//    echo "devo elaborare i dati";
//    echo $_REQUEST['q'];
//    print_r($_REQUEST)  //per debug



//se vogliamo salvare questi dati in un file

$content = 'q:'. $_REQUEST['q'] . "\n";
file_put_contents($filename, $content, FILE_APPEND);

echo 'dati ricevuti'.'<br>';


print_r ($_REQUEST);



}else{



?>

<form action="form.php" method="POST">inserisci dati
    
    <input type="text" name="q">
    <input type="submit">

</form>

<?php

}

?>