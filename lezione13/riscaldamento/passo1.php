<?php
require ('Abbonamento.php');

$abbonamento = new Abbonamento();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $abbonamento->save1();
    header('Location:passo2.php');
    die();
}
echo $abbonamento->display1();
