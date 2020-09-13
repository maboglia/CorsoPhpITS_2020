<?php

$sc = new SerieController();
$series = $sc->findAll();

?>

<h2>elenco</h2>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Genere</th>
            <th scope="col">Rating</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($series as $serie) : ?>
            <tr>
                <th scope="row"><?= $serie->id ?></th>
                <td><a href="?id=<?= $serie->id ?>"><?= $serie->titolo ?></a></td>
                <td><?= $serie->genere ?></td>
                <td><?= $serie->rating ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>