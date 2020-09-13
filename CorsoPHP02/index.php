<?php include 'header.php'; ?>

<h1>Benvenut* nello spazio personale di <?= NOME ?> <?= COGNOME ?></h1>
<h2>Torino, <?= date("D d/m/Y H:i:s") ?></h2>

<p>
   <?php  
   for ($i=0; $i < count($note); $i++) { 
       
       echo $note[$i]."<br>";
       
   }   
   ?>
</p>

<p>

   <?php 
   
   foreach ($note2 as $value) {
       echo $value."<br>";
   }
   
   ?>

</p>



<?php include 'footer.php'; ?>