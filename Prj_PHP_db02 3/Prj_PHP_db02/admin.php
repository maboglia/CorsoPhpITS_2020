<?php include_once 'db/config.php'; ?>
<?php include_once 'db/connessione.php'; ?>
<?php include 'view/header.php'; ?>

<h1>Admin libreria</h1>
<div class="row">

    <div class="col-4" id="sidebar">
        
        <?php include 'view/elenco_admin.php'; ?>
        
    </div>
    
    <div class="col-8" id="detail">
        
        <?php
    if (isset($_GET['id']) && $_GET['id'] > 0) {
        //vuoi vedere modificare o eliminare il libro dalla tabella libri
        include 'view/form_libro_upd.php';
    } else {
        //vuoi aggiungere un nuovo libro alla tabella libri
        include 'view/form_libro.php';

    }
    ?>

</div>
</div>

<?php

//include 'view/aggiungi.php';





?>


<?php include 'view/footer.php'; ?>