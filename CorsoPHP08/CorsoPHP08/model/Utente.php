<?php

class Utente
{
    private $nome;
    private $cognome;
    private $password;

    public function __construct($nome, $cognome){
        $this->nome = $nome;
        $this->cognome = $cognome;

        $this->password = substr($this->nome,0,2).substr($this->cognome, 0, 2).strlen($this->cognome);
    }

    public function firma()
    {
        return ucfirst($this->nome) .  " " .strtoupper($this->cognome);
    }

    public function __get($attributo)
    {
        return $this->$attributo;
    }

    public function __set($attributo, $valore)
    {
        if (isset($valore)) $this->$attributo = $valore;
    }



}