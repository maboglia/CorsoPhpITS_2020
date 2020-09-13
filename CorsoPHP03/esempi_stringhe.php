<?php

//  echo "Hello world";
//  echo 'Hello world';

    $word1 = "    Hello,    ";
    $word2 = "world!    ";

    $word3 = $word1.$word2;

    // $word3 = $word1;
    // $word3 .= $word2;

    echo "{$word3}";

    //funzioni (builtin) per le stringhe
    /*
    echo strtolower($word3);
    echo strtoupper($word3);
    echo ucfirst($word3);
    echo ucwords($word3);
    */

    echo strlen($word3);
    echo trim($word3);
    echo strstr($word3, 'rd');
    echo str_replace('Hello', 'ciao',$word3);

    echo str_repeat($word3,10);
    echo substr($word3, 14);







?>