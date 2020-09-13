<?php

$sc = new SerieController();
$serie = $sc->findOne($id);

?>

<h2><?= $serie->titolo ?></h2>


<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="..." id="locandina">
    <div class="card-body">
        <h5 class="card-title"><?= $serie->titolo ?></h5>
        <h5 class="card-title"><?= $serie->genere ?></h5>
        <h5 class="card-title"><?= $serie->rating ?></h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Acquista</a>
    </div>
</div>


<script>
    const locandina = document.getElementById('locandina');
    var xhr = new XMLHttpRequest();
    const URL = 'http://api.tvmaze.com/search/shows?q=<?= $serie->titolo ?>';

    xhr.onreadystatechange = function() {
        console.log(xhr.readyState);

        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
            let risposta = xhr.responseText;
            let rispJSON = JSON.parse(risposta);

            console.log(rispJSON[0].show.image.medium);
            locandina.src = rispJSON[0].show.image.medium;

    }

    }
    xhr.open("GET", URL);
    xhr.send();
</script>