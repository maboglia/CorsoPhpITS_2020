<h1>Gioco dadi</h1>

<?php

require 'model/Dado.php';

if (isset($_GET['gioco']) &&  $_GET['gioco'] == "reset" ){
    $_SESSION['partite'] = 0;
    $_SESSION['vittorie'] = 0;
}

$_SESSION['partite'] += 1;

$dado1 = new Dado("bianco");
$dado2 = new Dado("rosso");

$res1 = $dado1->lancio();
$res2 = $dado2->lancio();

if ($res1 == $res2) {
    $risultato = "vittoria";
    $_SESSION['vittorie'] += 1;
} else $risultato = "";

?>
<div>
    <img src="https://raw.githubusercontent.com/maboglia/CorsoJava/master/appunti/img/dadi/f<?= $res1 ?>.jpg" alt="" srcset="">
    <img src="https://raw.githubusercontent.com/maboglia/CorsoJava/master/appunti/img/dadi/f<?= $res2 ?>.jpg" alt="" srcset="">
</div>

<div>
    <a href="?pagina=dadi">gioca</a>
    <a href="?pagina=dadi&gioco=reset">reset</a>
</div>


<h2><?= $risultato ?></h2>
<h2>Partite: <?= $_SESSION['partite'] ?></h2>
<h2>Vittorie: <?= $_SESSION['vittorie'] ?></h2>
<?php if ($_SESSION['vittorie']>0): ?>
    <h2>Percentuale successo: <?= number_format(($_SESSION['vittorie'] / $_SESSION['partite']) * 100, 2, ",", ".") ?>%</h2>
<?php endif; ?>