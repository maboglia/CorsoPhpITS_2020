<?php
include 'db/Connessione.php';
include 'model/Serie.php';
include_once 'controller/SerieController.php';

$sc = new SerieController();
header('Content-Type: application/json');
?>

        <?php

        if (isset($_GET['id'])  &&  $_GET['id'] >= 0) {
            $id = (int) $_GET['id'];

            //singola serie in formato json
            $serie = $sc->findOne($id);
            echo json_encode($serie);

        } else {

            //elenco delle serie in formato json
            $series = $sc->findAll();
            echo json_encode($series);


        }

        ?>

