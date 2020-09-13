<h2>Modifica libro</h2>

<?php

$id = (int) $_GET['id'];


//1 collegamento a db
// include '../db/config.php';
// include '../db/connessione.php';


$query = "select * from libri where id = {$id}";
$richiesta = mysqli_query($connessione, $query);

$libro = mysqli_fetch_assoc($richiesta);

$titolo = $libro['titolo'];
$pagine = $libro['pagine'];
$prezzo = $libro['prezzo'];
$editore = $libro['editore'];

//3 scollega
mysqli_close($connessione);

?>


<form action="controller/upd_libro.php" method="post">
    <div class="form-group">
        <!-- <label for="id">id</label> -->
        <input class="form-control" type="hidden" placeholder="Inserici id" value="<?= $id ?>" name="id" id="id">
    </div>
    <div class="form-group">
        <label for="titolo">titolo</label>
        <input class="form-control" type="text" placeholder="Inserici titolo" value="<?= $titolo ?>" name="titolo" id="titolo">
    </div>

    <div class="form-group">
        <label for="prezzo">prezzo</label>
        <input class="form-control" type="number" placeholder="Inserici prezzo (es 12.00)" value="<?= $prezzo ?>" name="prezzo" id="prezzo">
    </div>

    <div class="form-group">
        <label for="pagine">pagine</label>
        <input class="form-control" type="number" placeholder="Inserici numero delle pagine" value="<?= $pagine ?>" name="pagine" id="pagine">
    </div>

    <div class="form-group">
        <label for="editore">editore</label>
        <input class="form-control" type="number" placeholder="Inserici identificativo dell'editore" value="<?= $editore ?>" name="editore" id="editore">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Modifica">
    </div>

</form>

<form action="controller/del_libro.php" method="post">
    <input class="form-control" type="hidden" value="<?= $id ?>" name="id" id="id">
    <input class="btn btn-danger" type="submit" value="Elimina questo libro">


</form>