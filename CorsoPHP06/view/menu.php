<nav>

    <?php foreach ($menu_principale as $chiave => $valore) : ?>
        <a class="etichetta" href="?pagina=<?=$valore?>"><?=$chiave?></a>
    <?php endforeach; ?>
    <?php if (isset($_SESSION['loggato']) && $_SESSION['loggato'] === true) : ?>
        <a href="?logout=ok">logout <?= $_SESSION['utente']['nome']?></a>
    <?php endif; ?>    
</nav>