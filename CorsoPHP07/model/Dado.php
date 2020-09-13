<?php

class Dado {
    
    private $facce;
    private $colore;

    public function __construct($colore, $facce=6){
        $this->facce = $facce;
        $this->colore = $colore;
    }

    public function lancio()
    {
        return rand(1, $this->facce);

    }

}
