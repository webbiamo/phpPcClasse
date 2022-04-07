<?php

class User{
    protected $name='';
    public function __construct($string){
        $this->name = $string;
    }
    
    public function setName($string){
        $this -> name = $string;
    }

    public function getName(){

        return $this->name;
    }
        

}