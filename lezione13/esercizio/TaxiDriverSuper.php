<?php

class TaxiDriverSuper extends TaxiDriver{
    public function __construct($name,$license = '')
    {
        parent::__construct($name);
        $this->license = $license;
    
        
    }
}