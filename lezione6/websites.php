<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>
<?php

$urls = [
    ['nasa', 'https://www.nasa.gov','il sito della nasa',],
    ['ibm', 'https://www.ibm.gov','il sito della ibm',],
    ['nasa', 'https://www.facebook.gov','il sito di facebook',],
];

$i=1;
echo '<table class="table" border = 1>
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">nome</th>
        <th scope="col">url</th>
        <th scope="col">comment</th>
    </tr>
</thead>
<tbody>';


foreach($urls as $riga){

    echo'
    <tr>
    <th scope="row">'.$i++.'</th>
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





