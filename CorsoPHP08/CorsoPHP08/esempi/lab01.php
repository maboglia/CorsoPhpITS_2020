<?php
session_start();
if(  isset($_SESSION['visite'])  ){
    $_SESSION['visite']++;
} else {
    $_SESSION['visite'] = 1;
}


$visite = $_SESSION['visite'];
 
// print_r($visite);
// var_dump($_SESSION);

?>

<h1>Numero visite in questa sessione <?=$visite?></h1>

<form method="post">
<input type="number" name="idProdotto">
<input type="submit" value="invia">

</form>


<?php

if (isset($_GET['idProdotto']))
    echo "<br>Mi hai mandato un parametro via GET: ".$_GET['idProdotto'];

if (isset($_POST['idProdotto']))
     echo "<br>Mi hai mandato un parametro via POST: " . $_POST['idProdotto'];

if (isset($_REQUEST['idProdotto']))
     echo "<br>Mi hai mandato un parametro via REQUEST: " . $_REQUEST['idProdotto'];


foreach ($_SERVER as $key => $value) {
    //echo $key ."-".$value."<br>";
}
