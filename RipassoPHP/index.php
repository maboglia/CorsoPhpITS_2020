<h1>Ripasso php</h1>



<?php 
    if (       isset($_GET['id_libro'])          )
    
    include 'model/singolo_libro.php';
    else 
    include 'model/elenco_libri.php'; 
    
    ?>

<?php //include 'view/form_login.php'  ?>

<?php //include 'controller/controller.php'  ?>
