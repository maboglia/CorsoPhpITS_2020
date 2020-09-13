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
            if ($logged === true) {
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
    if ($username === "mauro"  && $password === "12345") {
        return true;
    } else {
        return false;
    }
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