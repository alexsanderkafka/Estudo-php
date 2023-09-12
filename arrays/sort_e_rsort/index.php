<?php

    //Ordena o array sort
    //Ordena de forma inversa rsort

    $arr = [2, 1, 334, 32, 65, 38, 9999, 12, 4];
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";

    sort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";

    rsort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";

    $nome = ["Maria", "Aaron", "Joao", "Jose", "Matheus"];
    echo "<pre>";
    print_r($nome);
    echo "</pre>";
    echo "<br>";

    sort($nome);
    echo "<pre>";
    print_r($nome);
    echo "</pre>";
    echo "<br>";

    rsort($nome);
    echo "<pre>";
    print_r($nome);
    echo "</pre>";
    echo "<br>";


?>