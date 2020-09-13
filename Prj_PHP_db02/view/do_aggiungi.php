<?php

include_once '../db/config.php';
include '../db/connessione.php';

if (isset($_POST['invia'])){

    $titolo = mysqli_real_escape_string($connessione, $_POST['titolo']);
    $prezzo = (double) $_POST['prezzo'];
    $pagine = (int) $_POST['pagine'];
    $editore = (int) $_POST['editore'];


   echo  $query = "INSERT INTO libri (titolo, pagine, prezzo, editore) 
                values('{$titolo}', {$pagine}, {$prezzo}, {$editore} ) ";
    mysqli_query($connessione, $query);
    die("interruzione");

}

header("Location: http://192.168.64.2/Prj_PHP_db02/");
