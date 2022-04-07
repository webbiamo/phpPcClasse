<?php



// definire una classe chiamata Car con le seguenti proprietà:
// model: per contenere il modello
// manufacturer: per contenere la casa costruttrice

// scrivere i seguenti metodi: 
// setModel() per impostare il valore del modello
// setManufacturer() per impostare il valore dell casa costruttrice
// getData() per ottenere una stringa in cui sia indicata il modello e la casa costruttrice 


class Car{
    private $model='';
    private $manufacturer='';

    function setmodel($model){
        $this->model =$model;
    }

    function setManufacturer(int $manufacturer){
        $this->manufacturer = $manufacturer;
    }
    function getData(){
        return'modello: '.$this->model . ' casa costruttrice: ' . $this->manufacturer;
    }


}

$p1 = new Car();
$p1->setModel('mario');
$p1->setManufacturer('12');


echo $p1->getData();
