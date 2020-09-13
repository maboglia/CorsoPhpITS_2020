<?php
$query = "select id, titolo, prezzo from libri";
$risultati = mysqli_query($connessione, $query);
?>

<ul class="table table-striped">
    <!-- <tr>
        <th>titolo</th>
        <th>prezzo</th> 
    </tr> -->
    <?php while ($libro = mysqli_fetch_assoc($risultati)) { ?>

        <!-- <tr> -->
        <li rel="<?= $libro['id'] ?>"><?= $libro['titolo'] ?></li>
        <!-- <td><?= $libro['prezzo'] ?></td> -->
        <!-- </tr> -->

    <?php } ?>

</ul>