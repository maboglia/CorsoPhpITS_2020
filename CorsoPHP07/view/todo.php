<h1>Todo List</h1>

<form action="" method="post">
    <div>
        <label for="todo">Todo</label>    
        <input type="text" name="todo" id="todo">
    </div>
    <div>
        <input type="submit" value="aggiungi">
    </div>
</form>


<?php

//se mi hai inviato un nuovo todo da aggiugnere
if (isset($_POST["todo"])){
    //istanzio un oggetto di tipo Todo
    $todo = new Todo($_POST["todo"]);

    //aggiungo il todo ad un array di sessione
    $_SESSION["cosedafare"][] =  $todo;

}
//se ci sono valori nell'array di sessione
if (isset($_SESSION["cosedafare"])){
    //scorro l'array di sessione 
    foreach ($_SESSION["cosedafare"] as $cosa) {
        //stampo ciascuna cosa da fare
        echo "".$cosa->todo."<br>";
    }
}
?>

<a href="?pagina=todo&salva=true">Salva su file</a>
<a href="files/todo.txt">Scarica il file</a>

<?php
if (isset($_GET['salva']) && $_GET['salva']=="true"){

    $archivio = "files/todo.txt";
    
    $gestore = fopen($archivio,'w');
    
    if (isset($_SESSION["cosedafare"])) {
        //scorro l'array di sessione 
        foreach ($_SESSION["cosedafare"] as $cosa) {
            fwrite($gestore, $cosa->todo."\n");
        }
        fclose($gestore);
    }
    
}

