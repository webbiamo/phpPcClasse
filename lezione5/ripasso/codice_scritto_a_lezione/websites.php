<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Riscaldamento Lezione 6</title>
</head>
<body>
    <div class="container">
       
                <h1>urls</h1>

<?php

$urls=[
    ['nasa','https://www.nasa.gov','il sito della nasa'],
    ['ibm','https://www.ibm.gov','il sito della ibm'],
    ['facebook','https://www.facebook.com','il sito di meta'],
    ['fiat','https://www.fiat.it','il sito della fiat'],
    ['ford','https://www.ford.com','il sito della ford'],
    ['maserati','https://www..com','il sito della maserati'],
];



$i=1;
echo '<table class="table">
<thead>
    <tr>
        <th >#</th>
        <th >nome</th>
        <th >url</th>
        <th >commenti</th>
    </tr>
</thead>
<tbody>';

foreach($urls as $riga){

    echo '
    <tr>
    <th >'.$i++.'</th>
    <td>'.$riga['0'].'</td>
    <td>'.$riga['1'].'</td>
    <td>'.$riga['2'].'</td>
    </tr>
    ';
}
echo '</tbody>
</table>';
?>

 </div>   
</body>
</html>
