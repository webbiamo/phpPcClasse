<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Riscaldamento Lezione 7</title>
</head>
<body>
    <div class="container">
       
    <h1>urls</h1>

<?php

$urls=[
    [
        'name'=>'nasa',
        'url'=>'https://www.nasa.gov',
        'comment'=>'il sito della nasa. Qui puoi trovare informazioni sullo spazio e i pianeti.',
        'img'=>'https://fakeimg.pl/250x200/',
        'hits'=>234,
        'last_modified'=>'Last updated 10/2/2022 h 11:10'


    ],
    [
        'name'=>'ibm',
        'url'=>'https://www.ibm.gov',
        'comment'=>'il sito della ibm. Puoi trovare info commerciali e sui prodotti tecnici',
        'img'=>'https://fakeimg.pl/250x200/',
        'hits'=>212,
        'last_modified'=>'Last updated 10/2/2022 h 11:10'
    ],
    [
        'name'=>'facebook',
        'url'=>'https://www.facebook.com',
        'comment'=>'il sito di meta è molto bello e soprattutto si fanno un sacco di cose',
        'img'=>'https://fakeimg.pl/250x200/',
        'hits'=>156,
        'last_modified'=>'Last updated 10/2/2022 h 11:10'
    ],  
    [
        'name'=>'nasa',
        'url'=>'https://www.nasa.gov',
        'comment'=>'il sito della nasa. Qui puoi trovare informazioni sullo spazio e i pianeti. Ci sono informazioni di ogni tipo e',
        'img'=>'https://fakeimg.pl/250x200/',
        'hits'=>178,
        'last_modified'=>'Last updated 10/2/2022 h 11:10'


    ],
   

];



$i=1;

//echo '<div class="card-group">';
echo '<div class="row row-cols-3  g-4">';
foreach($urls as $url){
   echo '<div class="col">';
    echo '
    <div class="card">
        <img src="'. $url['img'] .'" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">'.$url['name'].'</h5>
            <p class="card-text">'.$url['comment'].'</p>
            <a href="'.$url['url'].'" class="btn btn-primary position-relative">
              Vai al sito  
              <span class="badge bg-secondary position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              '.$url['hits'].'+
              </span> 
            </a>
        </div>
        <div class="card-footer">
            <small class="text-muted">'.$url['last_modified'].'</small>
        </div>
    </div>';
    echo '</div> <!-- fine col--!>';
}

echo '
</div><!-- fine group -->';
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>