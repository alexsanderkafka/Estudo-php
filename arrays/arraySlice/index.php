<?php

    $arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";
    
    $slice = array_slice($arr, 1, 3);
    echo "<pre>";
    print_r($slice);
    echo "</pre>";
    echo "<br>";

    $slice2 = array_slice($arr, 4, 4);
    echo "<pre>";
    print_r($slice2);
    echo "</pre>";
    echo "<br>";

    $slice3 = array_slice($arr, 4);
    echo "<pre>";
    print_r($slice3);
    echo "</pre>";
    echo "<br>";

    $slice4 = array_slice($arr, 4, -3);
    echo "<pre>";
    print_r($slice4);
    echo "</pre>";
    echo "<br>";

?>