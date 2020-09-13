<?php

//1 collegamento a db
include '../db/config.php';
include '../db/connessione.php';

//2 update

$id = (int) $_POST['id'];
$titolo = mysqli_real_escape_string($connessione, $_POST['titolo']);
$pagine = (int) $_POST['pagine'];
$editore = (int) $_POST['editore'];
$prezzo = (double) $_POST['prezzo'];

$query = "UPDATE libri set titolo='{$titolo}', pagine={$pagine}, prezzo={$prezzo}, editore={$editore} WHERE id = {$id}";
mysqli_query($connessione, $query);
//3 scollega
mysqli_close($connessione);
//4 ritorna a admin.php
header("Location: ../admin.php");
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';


?>