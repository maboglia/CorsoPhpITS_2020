<?php
$id = (int) $_GET['id'];
$query = "select id, nome, anni, mantello, carattere from gatti where id = $id";
$risultati = mysqli_query($connessione, $query);
$gatto = mysqli_fetch_assoc($risultati);

?>

<div class="card" style="width: 18rem;">
    <img src="img/<?= $gatto['id'] ?>.jpg" class="card-img-top" alt="<?= $gatto['nome'] ?>">
    <div class="card-body">
        <h5 class="card-title"><?= $gatto['nome'] ?></h5>
        <p class="card-text"><?= $gatto['nome'] ?> è un gatto di <?= $gatto['anni'] ?> anni,
            ha un mantello <?= $gatto['mantello'] ?>. Ha un carattere <?= $gatto['carattere'] ?></p>
        <a href="#" class="btn btn-primary">Adottalo subito!</a>
    </div>
</div>

<div>
    <a href="?" class="btn btn-danger">Torna all'elenco</a>
</div>