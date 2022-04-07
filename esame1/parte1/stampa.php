<?php

$testo = $_GET['text'];
echo $testo. ' cosi come lo hai inserito'.'<br>';
echo strtolower($testo).' tutto in minuscolo'.'<br>';
echo ucwords($testo).' con le iniziali delle parole in maiuscolo'.'<br>';
print_r($_GET);

?>