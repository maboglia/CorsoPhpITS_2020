<?php

include_once '../db/config.php';
include '../db/connessione.php';

if (isset($_POST['invia'])){

   echo  $query = "INSERT INTO gatti (nome, anni, mantello, carattere) values('$_POST[nome]',$_POST[anni], '$_POST[mantello]', '$_POST[carattere]' ) ";
    mysqli_query($connessione, $query);

}

header("Location: http://192.168.64.2/Prj_PHP_db01/");
