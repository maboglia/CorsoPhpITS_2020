<?php 



class SerieController {

    public function findAll(){

        $query = "SELECT * FROM serie";

        $conn = new Connessione();

        $conn->connetti();

        $richiesta = $conn->getConnessione()->prepare($query);
        $richiesta->execute();
        $richiesta->setFetchMode(PDO::FETCH_CLASS, "Serie");

        $series = array();

        while ($serie = $richiesta->fetch()) {
            $series[] = $serie;
        }
        return $series;
    }

    public function findOne($id)
    {

        $query = "SELECT * FROM serie where id = :id";

        $conn = new Connessione();

        $conn->connetti();

        $richiesta = $conn->getConnessione()->prepare($query);
        $richiesta->bindParam(":id", $id, PDO::PARAM_INT);
        $richiesta->execute();
        $richiesta->setFetchMode(PDO::FETCH_CLASS, "Serie");

        $serie = $richiesta->fetch();
        return $serie;
    }






}





?>