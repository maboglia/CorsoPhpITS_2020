<?php include 'header.php'; ?>

<!-- <h1>Benvenut* nello spazio personale di <?= NOME ?> <?= COGNOME ?></h1> -->
<h2>Torino, <?= date("D d/m/Y H:i:s") ?></h2>



<?php 

//  if (    isset($_GET['pagina'])    ) {

//     $pagina = $_GET['pagina'];


// } else $pagina =  "home";
//operatore ternario
$pagina = (isset($_GET['pagina'])) ?  $_GET['pagina'] : "home";


    switch ($pagina) {
        case 'info':
            include 'page1.php';
            break;
        
        case 'contact':
            include 'page2.php';
            break;

        case 'about':
            echo "<h2>About me: -----------</h2>";
            break;
        
        default:
            doLogin();
            break;
    }



?>




<?php include 'footer.php'; ?>