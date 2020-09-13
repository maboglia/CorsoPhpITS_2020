<?php
$query = "select id, nome, anni from gatti";
$risultati = mysqli_query($connessione, $query);
?>



<table class="table table-striped">
    <tr>
        <th>nome</th>
        <th>anni</th>
    </tr>
    <?php while ($gatto = mysqli_fetch_assoc($risultati)) { ?>

        <tr>
            <td><a href="?id=<?= $gatto['id'] ?>"><?= $gatto['nome'] ?></a></td>
            <td><?= $gatto['anni'] ?></td>
        </tr>

    <?php } ?>

</table>