<?php
include '../db/config.php';
include '../db/connessione.php';
$id = (int) $_GET['id'];
$query = "select * from libri where id = $id";
$risultati = mysqli_query($connessione, $query);
$libro = mysqli_fetch_assoc($risultati);

?>

<div class="card" style="width: 18rem;">
    <!-- <img src="img/<?= $libro['id'] ?>.jpg" class="card-img-top" alt="<?= $libro['titolo'] ?>"> -->
    <div class="card-body">
        <h5 class="card-title"><?= $libro['titolo'] ?></h5>

        <ul>
            <li><?= $libro['pagine'] ?></li>
            <li><?= $libro['prezzo'] ?></li>
            <li><?= $libro['editore'] ?></li>
        </ul>

        <p class="card-text"><?= $libro['titolo'] ?> è un libro di <?= $libro['pagine'] ?> pagine,
            ha un prezzo <?= $libro['prezzo'] ?>. Ha un editore <?= $libro['editore'] ?></p>
        <a href="#" class="btn btn-primary">Compralo subito!</a>
    </div>
</div>

<div>
    <!-- <a href="?" class="btn btn-danger">Torna all'elenco</a> -->
</div>