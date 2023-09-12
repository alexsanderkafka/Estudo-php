<?php

    //Ordena em ordem crescente asort
    //Ordena e pelas chaves ksort

    $arr = [
        "Pedro" => 18,
        "Matheus" => 29,
        "Joaquim" => 14,
        "Maria" => 12
    ];

    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";

    asort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";

    arsort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";

    ksort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";

    krsort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";
?>