<?php



/*ho un armadio con degli abiti e una valigia vuota
* voglio poter spostare gli atiti dall'armadio alla valigia
* il carrello della spesa è come la nostra valigia in cui spostiamo gli elementi
*/

//si parte dall'esperienza utente per risolvere il problema





/** generiamo duel liste  */





// echo 'armadio';
// echo '<ul>';
// echo '<li> maglia </li>';
// echo '<li> pantalone </li>';
// echo '<li> calze </li>';
// echo '</ul>';

// echo '<hr>';



// echo 'valigia';
// echo '<ul>';

// echo '</ul>';



//svolgimento 1


// $armadio=['maglia', 'pantalone', 'calze'];
// $valigia=[];




// echo 'armadio';
// echo '<ul>';
// foreach($armadio as $abito){
//     echo '<li>'.$abito.'</li>';
// }
// echo '</ul>';

// echo '<hr>';



// echo 'valigia';
// echo '<ul>';
// foreach($valigia as $abito){
//     echo '<li>'.$abito.'</li>';
// }
// echo '</ul>';

//svolgimento 2




// devo controllare se in sessione non ho anmcora armadio e valigia allora
// li creo partendo dai valori dalle variabili omonime


session_start();
if(!isset($_SESSION['armadio'])){
    $_SESSION['armadio']=$armadio;
}


session_start();
if(!isset($_SESSION['valigia'])){
    $_SESSION['valigia']=$valigia;
}


$armadio=$_SESSION['armadio'];
$valigia=$_SESSION['valigia'];

/** ci sono delle cose da fare?  */
/** la variabile sposta è defnita uso il suo valore come indice */

if(isset($_GET['sposta'])){
    $id=$_GET['sposta'];
    echo 'devo prendere '. $armadio[$id] . '<br>';
    $valigia[]=$armadio[$id];
    unset($armadio[$id]);
}


echo '<br> armadio';
echo '<ul>';
foreach($armadio as $id=>$abito){
    echo '<li>'.$abito.' <a href="pagina.php?sposta='.$id. '">prendi</a></li>'."\n";
}
echo '</ul>';

echo '<hr>';



echo 'valigia';
echo '<ul>';
foreach($valigia as $abito){
    echo '<li>'.$abito.'</li>';
}
echo '</ul>';


$_SESSION['armadio']=$armadio;
$_SESSION['valigia']=$valigia;
