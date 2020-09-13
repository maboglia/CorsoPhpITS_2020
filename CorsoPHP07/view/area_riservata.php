<h1>area riservata</h1>

<?php

$studenti = file_get_contents("database/studenti.txt");

$studentiArray = explode(",", $studenti);



//$listaNormale = ['Adrian Ionut Birgu', 'Adrianne Paul Mencias Lagleva', 'Alessandro Picchi' ];
// $listaAss = [
//     "Studente1" => 'Adrian Ionut Birgu', 
//     "Studente2" => 'Adrianne Paul Mencias Lagleva', 
//     "Studente3" => 'Alessandro Picchi' 
// ];

echo creaLista($studentiArray);

// echo creaListaAssociativa($listaAss);

?>
