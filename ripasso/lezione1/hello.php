<?php


echo "<h3> Gestione variabili </h3>";

$a = 10;
$b = 20;
echo '$a vale:' . $a . '<br>';
echo '$b vale: ' . $b . '<br>';

echo 'la somma di $a e $b vale: ' . ($a + $b) . '<br>';
echo 'la differenza tra $a e $b vale: ' . ($a - $b) . '<br>';
echo 'il prodotto tra $a e $b vale: ' . ($a * $b) . '<br>';
echo 'il rapporto tra $a e $b vale: ' . ($a / $b) . '<br>';

echo date_default_timezone_set("Europe/Berlin") . '<br>';
echo date("j/n/Y");


echo "<h3> Capoluogo </h3>";
$town = 'Torino';
$region = 'Piemonte';
$msg = ' è il capoluogo della regione ';
echo $town . $msg . $region . '<br>';



echo "<h3> Calcolo IVA </h3>";

define('iva', 22);
//echo iva . '<br>';
$costo = 40; 
$costo_ivato = $costo + (($costo/100)*iva);
//echo $costo_ivato;

echo 'Il prodotto costa ' . $costo . ' euro + IVA ' . iva . '% per un totale di '.  $costo_ivato;

echo "<h3> Magic constant </h3>";

echo __DIR__ . '<br>';
echo __FILE__ . '<br>';
echo __LINE__ . '<br>';


echo "<h3>Incremento variabili</h3>";

$i = 12; 
echo $i . '<br>';
echo ++$i . '<br>';


echo "<h3>Calcolo area e radice quadrata</h3>";



// definire una variabile $area_quadrato ed assegnare il valore 900; utilizzando la
// funzione sqrt() calcolarne la radice quadrata e stampare il messaggio:
// il quadrato ha area 900 e il suo lato calcolato con la radice quadrata vale 30

$area_quadrato = 900;
echo sqrt($area_quadrato);


il quadrato ha area 900 e il suo lato calcolato con la radice quadrata vale 30














?>