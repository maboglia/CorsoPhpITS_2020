<ul>
<?php

$voti = array(28, 30, 26, 25, 27);
print_r($voti);
echo $lunghezza = count($voti);
$somma = 0;

// for ($i=0; $i < $lunghezza; $i++) { 
//     echo  "<li>" . $voti[$i] . "</li>";
// }

sort($voti);
print_r($voti);

foreach ($voti as $voto) {
    $somma += $voto;
    echo  "<li>" . $voto . "</li>";
}


?>
</ul>

la media è: <?= $somma/$lunghezza ?>

<pre>
<?php 

$studente = [   "nome"=>"mauro", 
        "cognome"=>"bogliaccino", 
        "coniugato"=>true, 
        'altezza'=>1.82, 
        "figli"=>1,
        "hobbies" => ['karate', "mezzo" => 'moto', 'lettura']
    ];
//print_r($studente);
var_dump($studente);
?>
</pre>
<ul>
    <?php foreach ($studente as $chiave => $valore) : ?>

        <li><?=$chiave?>: <?=$valore?> </li>

    <?php endforeach; ?>
</ul>

<?php 

        foreach ($studente as $key => $value) {

            if (!is_array($value))
           echo "$key: $value"."<br>";

           //se è un array
            else {
                echo "$key:";
                foreach ($value as $key2 => $value2) {
                   echo  "<h2>".$value2."</h2>";
                }
            }

        }

?>
