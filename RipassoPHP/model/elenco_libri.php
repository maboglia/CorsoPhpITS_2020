<?php

include 'database.php';

$query = "select * from libri";

$richiesta = mysqli_query($connessione, $query);
?>
<table id="libri">
<?php
while ( $libro = mysqli_fetch_assoc($richiesta)     ){
	echo "<tr><td><a href='?id_libro=$libro[id]'>". $libro['titolo'] ."</a><td></tr>";
	
}
?>
</table>
