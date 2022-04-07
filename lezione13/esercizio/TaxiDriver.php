<?php


class TaxiDriver extends User {
    protected $license = '';  //inizializzamo una stringa vuota
    public function setLicense($string)
    {
        $this->license = $string;

        # code...
    }
    public function getLicense(){
        return $this->license;
    }
}