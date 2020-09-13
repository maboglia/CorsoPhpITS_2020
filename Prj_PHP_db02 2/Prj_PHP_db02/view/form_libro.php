<h2>Aggiungi nuovo libro</h2>

<form action="controller/add_libro.php" method="post">
    <div class="form-group">
        <label for="titolo">titolo</label>
        <input class="form-control" type="text" placeholder="Inserici titolo" name="titolo" id="titolo">
    </div>

    <div class="form-group">
        <label for="prezzo">prezzo</label>
        <input class="form-control" type="number" placeholder="Inserici prezzo (es 12.00)" name="prezzo" id="prezzo">
    </div>

    <div class="form-group">
        <label for="pagine">pagine</label>
        <input class="form-control" type="number" placeholder="Inserici numero delle pagine" name="pagine" id="pagine">
    </div>

    <div class="form-group">
        <label for="editore">editore</label>
        <input class="form-control" type="number" placeholder="Inserici identificativo dell'editore" name="editore" id="editore">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Aggiungi">
    </div>

</form>