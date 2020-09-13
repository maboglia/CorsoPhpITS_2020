<?php

function routing($pagina)
{
    //qui metto la logica per includere dinamicamente i contenuti nella parte centrale dell'interfaccia


    switch ($pagina) {
        case 'info':
            include 'view/page1.php';
            break;

        case 'contact':
            include 'view/page2.php';
            break;

        case 'about':
            echo "<h2>About me: -----------</h2>";
            break;

        default:
            $logged = doLogin();
            if ($_SESSION['loggato'] === true) {
                include 'view/area_riservata.php';
            } else {
                include 'view/login.php';
            }
            break;
    }



    
}

//funzione per eseguire il login
function doLogin()
{
    //TODO: eliminare le chiamate a POST e ricevere le variabili come parametri
    $username = isset($_POST['username']) ? $_POST['username'] : "guest";
    $password = isset($_POST['password']) ? $_POST['password'] : "guest";

    //TODO: qui interrogare database per verificare user e pass

    $user = databaseUtenti($username, $password);

    if ($user != false ) {
        $_SESSION['loggato'] = true;
        $_SESSION['utente'] = $user;
        return true;
    } else {
        return false;
    }
}

function databaseUtenti($username, $password)
{
    //qui metterò chiamata a database per verifica login, per adesso lavoro con un array
    $utenti = [
        ["nome"=>"mauro", "password"=>"12345"],//0
        ["nome"=>"alice", "password"=>"55555"],//1
        ["nome"=>"laura", "password"=>"44444"],//2

    ];

    foreach ($utenti as $utente) {
        if ($utente['nome']== $username && $utente['password']== $password)
        return $utente;
    }

    return false;
}

function creaLista($lista)
{

    $listaUL = "<ul>";

    foreach ($lista as $list_item) {
        $listaUL .= "<li><input type='checkbox'>" . $list_item . "</li>";
    }

    $listaUL .= "</ul>";

    return $listaUL;
}


function creaListaAssociativa($lista)
{

    $listaUL = "<ul>";

    foreach ($lista as $chiave => $list_item) {
        $listaUL .= "<li>" . $chiave . "-" . $list_item . "</li>";
    }

    $listaUL .= "</ul>";

    return $listaUL;
}


?>