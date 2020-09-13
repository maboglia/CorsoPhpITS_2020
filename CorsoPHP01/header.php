<?php 
    //la var in php viene introdotta dal simobolo $
    $titolo = " mio sito in PHP";
    //la costante in PHP si costruisce conl la funzione define()
    define("TITOLO", "Il mio sito in PHP");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITOLO ?></title>
</head>
<body>
<a href="index.php">home</a>    
<a href="page1.php">pagina 1</a>    
<a href="page2.php">pagina 2</a>    
