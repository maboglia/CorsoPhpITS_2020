<h1>Le informazioni......</h1>


<a href="?pagina=info&sezione=1">sezione 1</a>
<a href="?pagina=info&sezione=2">sezione 2</a>


<?php
$sezione = isset($_GET['sezione']) ? $_GET['sezione'] : 0;
?>


<?php if ($sezione == 1) : ?>
    <p>
        Paragrafo 1
        <img src="https://www.cittadelsole.it/cimage/img.php?src=/skin1/images/fascettebig/dl36967a.jpg&w=545&h=545&fill-to-fit=ffffff&sharpen&save-as=jpg&q=70" alt="" srcset="">
    </p>

<?php endif; ?>


<?php if ($sezione == 2) : ?>
    <p>
        Paragrafo 2
        <img src="https://wips.plug.it/cips/tecnologia/cms/2020/05/monopattino-elettrico.jpg?w=738&a=c&h=415" alt="" srcset="">
    </p>

<?php endif; ?>


<?php
// echo ($_SERVER['HTTP_HOST']) . "<br>";
// echo ($_SERVER['HTTP_USER_AGENT']) . "<br>";
// echo ($_SERVER['REMOTE_ADDR']) . "<br>";
// echo ($_SERVER['SERVER_PROTOCOL']) . "<br>";
// echo ($_SERVER['REQUEST_METHOD']) . "<br>";
// echo ($_SERVER['QUERY_STRING']) . "<br>";

?>