<?php
require ('Abbonamento.php');

$abbonamento = new Abbonamento();

if($_SERVER['REQUEST_METHOD']==='POST'){
    $abbonamento->save2();
    header('Location:passo3.php');
    die();
}
echo $abbonamento->display2();