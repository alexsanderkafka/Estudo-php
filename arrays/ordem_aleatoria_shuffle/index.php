<?php

    //Altera a estrutura original
    $arr = range(1, 20);

    echo "<pre>";
    print_r($arr);
    echo "</pre><br>";

    shuffle($arr);

    echo "<pre>";
    print_r($arr);
    echo "</pre><br>";

    shuffle($arr);

    echo "<pre>";
    print_r($arr);
    echo "</pre><br>";
?>