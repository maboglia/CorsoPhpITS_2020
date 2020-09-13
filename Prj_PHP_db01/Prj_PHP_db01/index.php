<?php include_once 'db/config.php'; ?>
<?php include_once 'db/connessione.php'; ?>
<?php include 'view/header.php'; ?>

<h1>I miei animali preferiti!</h1>

<?php

include 'view/aggiungi.php';


if (     isset($_GET['id']) && $_GET['id']>0      ){
    //vuoi vedere la scheda di dettaglio
    include 'view/dettaglio.php';
} else {    
    //vuoi mostrare l'elenco
    include 'view/elenco.php';
}



?>


<?php include 'view/footer.php'; ?>