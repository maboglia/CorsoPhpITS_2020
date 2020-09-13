<?php 

    //includo il file delle funzioni di uso generale
    include 'controller/funzioni.inc.php';

    //la var in php viene introdotta dal simobolo $
    $titolo = " mio sito in PHP";
    
    //la costante in PHP si costruisce con la funzione define()
    define("TITOLO", "Il mio sito in PHP");
    define("NOME", "Mauro");
    define("COGNOME", "Bogliaccino");


    $menu_principale = [
            'Home'=>'home', 
            'About'=>'about', 
            'Info'=>'info', 
            'Contact'=> 'contact'
        ];



?>