<?php


require('user.php');
require('TaxiDriver.php');
require('TaxiDriverSuper.php');

$user = new User('Carlo');
echo $user->getName();


$user2 = new TaxiDriver('Mario');  //creo oggetto taxidriver
$user2->setLicense('AF-123');
echo $user2->getLicense();


$user3 = new TaxiDriverSuper('Franca','RT-34');
echo $user3->getLicense();


