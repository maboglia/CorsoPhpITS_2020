<!-- qui includo il file header che contiene config che contiene functions -->
<?php include 'view/header.php'; ?>

<h2>Torino, <?= date("D d/m/Y H:i:s") ?></h2>

<?php 

//operatore ternario: hai richiesto una pagina? altrimenti vai in home
$pagina = (isset($_GET['pagina'])) ?  $_GET['pagina'] : "home";

//chiamo la funzione per fare il routing
routing($pagina);

?>
<!-- qui includo il pié di pagina con gli eventuali javascript -->
<?php include 'view/footer.php'; ?>