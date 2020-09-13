<?php 
    //la var in php viene introdotta dal simobolo $
    $titolo = " mio sito in PHP";
    //la costante in PHP si costruisce con la funzione define()
    define("TITOLO", "Il mio sito in PHP");
    define("NOME", "Mauro");
    define("COGNOME", "Bogliaccino");
    //uso la fun array()
    $note = array("do", "re", "mi",'fa', "sol","la", "si");
    //uso la notazione short []
    $note2 = ["do", "re", "mi",'fa', "sol","la", "si"];

    $menu_principale = [
            'Home'=>'home', 
            'About'=>'about', 
            'Info'=>'info', 
            'Contact'=> 'contact'
        ];

    function doLogin()
    {
        $username = isset($_POST['username']) ? $_POST['username'] : "guest";
        $password = isset($_POST['password']) ? $_POST['password'] : "guest";


        if ($username === "mauro"  && $password === "12345") {
            include 'area_riservata.php';
        } else {
            include 'login.php';
        }
    }

?>