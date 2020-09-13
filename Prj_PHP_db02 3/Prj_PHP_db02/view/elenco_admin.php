<?php
$query = "select id, titolo, prezzo from libri";
$risultati = mysqli_query($connessione, $query);
?>

<ul class="table table-striped">
    <?php while ($libro = mysqli_fetch_assoc($risultati)) { ?>
        <!-- chiamata sincrona allo script php -->
        <li><a href="admin.php?id=<?= $libro['id'] ?>"><?= $libro['titolo'] ?></a></li>

    <?php } ?>

</ul>