<?php

    $arr = [
        "marca" => "BMW",
        "motor" => "2.4",
        "tetoSolar" => true,
        "portais" => 4
    ];
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";

    $chaves = array_keys($arr);
    echo "<pre>";
    print_r($chaves);
    echo "</pre>";
    echo "<br>";

    $values = array_values($arr);
    echo "<pre>";
    print_r($values);
    echo "</pre>";
    echo "<br>";
?>