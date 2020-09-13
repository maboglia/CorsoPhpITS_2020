<?php

class Todo {
    
    private $todo;
    private $done;

    public function __construct($todo)
    {
        $this->todo = $todo;
        $this->done = false;
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


