<?php 

class Connessione {

    private $connessione=null;

    public function connetti()
    {
        try {
            $this->connessione = new PDO("mysql:host=192.168.64.2;dbname=its_2020", "its2020", "its2020");
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getConnessione()
    {
        return $this->connessione;
    }

    public function disconnetti()
    {
        if ($this->connessione != null)
            $this->connessione = null;
    }
}






?>