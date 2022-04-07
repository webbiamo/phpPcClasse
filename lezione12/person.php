<?php


class Person{
    private $name='';
    private $age='';

    function setName(string $stringa){
        $this->name = $stringa;
    }

    function setAge(int $num){
        $this->age = $num;
    }
    function getData():string{
        return'il nome: '.$this->name . ' età: ' . $this->age;
    }


}

$p1 = new Person();
$p1->setName('mario');
$p1->setAge('12');


echo $p1->getData();
