<?php

function somma($a, $b){
    return $a + $b;
}

function calcola($a, $b, $operatore="+"){
    switch ($operatore){
        case "+";
        return $a + $b;
            break; 
    
        case "-";
        return $a - $b;
            break; 
    
        case "/";
        return $a / $b;
            break; 
    
        case "*";
        return $a * $b;
        break; 
    }
    
    
}


// echo calcola(5,4);
// echo calcola(5,4,"-");
// echo calcola(7,4);

$a = 7;

function modifica(){
    global $a;
    $a=8;
}
modifica();
echo $a;

$note = ["do", "re", "mi", 'fa', "sol", "la", "si", "re", "mi", 'fa', "sol", "la", "si"];


function intesta($note2){
    
    $lista = "<ul>";

    foreach ($note2 as $nota) {
        $lista .= "<li>".$nota."</li>";
    }
    
    $lista .= "</ul>";
    
    return $lista;

}

echo intesta($note);
?>

