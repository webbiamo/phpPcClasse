<?php
include 'form.php';

$form= new Form();
//print_r($_SERVER);

if($_SERVER['REQUEST_METHOD']=='POST'){
    $result= $form->save();
    if($result['status']=='OK'){
        echo "abbiamo ricevuto i suoi dati" ;
    } else {
        echo 'c\è stato un problema: ' . $result['message'];
    }
} else {
    echo $form->display();
}