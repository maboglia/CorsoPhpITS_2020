<?php

include 'model/database.php';

//se hai passato username e password
if (    isset($_POST['nome'])  && isset($_POST['password'])      ){
	//s	e user e pw corrispondono a quelli memorizzati nel database
	$nome = $_POST['nome'];
	$password = $_POST['password'];
	
    $query = "select * from utenti where username = '$nome' and password = '$password'";
    
    $richiesta = mysqli_query($connessione, $query);

    while ($risultato = mysqli_fetch_assoc($richiesta)) {
        echo $risultato['username'];

        
    }
	
	
	
}
else {
	//s	e non hai passato user e pw
			    echo "compila il modulo per entrare";
}


?>