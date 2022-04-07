<?php







$numero = rand(0,100);
echo $numero;


if ($_SERVER['REQUEST_METHOD'] ==='POST') {
    $a = $_POST['in_a'];

    $b = $_POST['in_b'];

    $scelta = $_POST['scelta'];

    if ($a>$b) $risultato = "1";
    if ($a<$b) $risultato = "-1";
    if($a==$b) $risultato = "0";

    if ($risultato == $scelta) {
         $messaggio = "hai vinto";
    } else {
        $messaggio = "hai perso ";
    }
   

}

//$out_a= rand(1,9);
//$out_b= rand(1,9);

// if (!empty($messaggio)) {
//     echo  $messaggio ;

// }
?>

<form action ='' method='POST'>
    <legend for='in_a'>primo numero </legend><input type='text' name='in_a' value ="<?= $out_a ?>" > <br/> <br/>
    <legend for='in_b'>secondo numero</legend>
    <input type='text' name='in_b' value ="<?= $out_b?>" >
    <br/><br/>
<input type='submit' value="Elabora">




</form>