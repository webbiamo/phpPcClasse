<?php

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

$out_a= rand(1,9);
$out_b= rand(1,9);

if (!empty($messaggio)) {
    echo  $messaggio ;

}
?>

<form action ='' method='POST'>
<legend for='in_a'>il valore </legend><input type='text' name='in_a' value ="<?= $out_a ?>"readonly  > 
<legend for='in_b'>è maggiore del valore </legend>
<input type='text' name='in_b' value ="<?= $out_b?>" readonly >
<legend for='scelta'>risposta </legend>
si, maggiore<input type='radio' name='scelta' value='1'>
no, minore <input type='radio' name='scelta' value='-1'>
sono uguali<input type='radio' name='scelta' value='0'><br/>
<input type='submit'>




</form>
