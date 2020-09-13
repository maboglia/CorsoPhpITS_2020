<?php

include 'database.php';

$id = $_GET['id_libro'];

$query = "select * from libri where id=$id";

$richiesta = mysqli_query($connessione, $query);
?>
<div id="libri">
<?php
while ( $libro = mysqli_fetch_assoc($richiesta)     ){
	echo "<h2>". $libro['titolo'] ."<h2>";
	echo "<h3>Prezzo". $libro['prezzo'] ."<h3>";
	echo "<h3>pagine". $libro['pagine'] ."<h3>";
	
}
?>
</div>
