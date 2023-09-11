<?php

    //Remover elementos do array
    //ou resgatar elementos de array
    //edita o array original
    echo "<h1>Array 1</h1>";
    $arr = [1, 2, 3, 4, 5, 6];
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";

    $removidos = array_splice($arr, 1, 2);
    echo "<pre>";
    print_r($removidos);
    echo "</pre>";
    echo "<br>";

    echo "<h1>Array 2</h1>";
    $arr2 = [1, 2, 3, 4, 5, 6];
    echo "<pre>";
    print_r($arr2);
    echo "</pre>";
    echo "<br>";

    $removidos2 = array_splice($arr2, 3);
    echo "<pre>";
    print_r($removidos2);
    echo "</pre>";
    echo "<br>";

    echo "<h1>Array 3</h1>";
    $arr3 = [1, 2, 3, 4, 5, 6];
    echo "<pre>";
    print_r($arr3);
    echo "</pre>";
    echo "<br>";
    $removidos3 = array_splice($arr3, 1, -1);
    echo "<pre>";
    print_r($removidos3);
    echo "</pre>";
    echo "<br>";
?>