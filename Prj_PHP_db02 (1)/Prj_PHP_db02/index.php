<?php include_once 'db/config.php'; ?>
<?php include_once 'db/connessione.php'; ?>
<?php include 'view/header.php'; ?>

<h1>I miei libri preferiti!</h1>
<div class="row">

    <div class="col-4" id="sidebar">
        
        <?php include 'view/elenco.php'; ?>
        
    </div>
    
    <div class="col-8" id="detail">
        
        <?php
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        //vuoi vedere la scheda di dettaglio
        include 'view/dettaglio.php';
    }
    ?>

</div>
</div>

<?php

//include 'view/aggiungi.php';





?>


<?php include 'view/footer.php'; ?>