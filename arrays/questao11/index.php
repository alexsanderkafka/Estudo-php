<?php

    function ordenarNumeros($arr){
        sort($arr);
        print_r($arr);
    }


    $arr = range(1, 20, 2);
    shuffle($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre><br>";

    

    echo "<pre>";
    ordenarNumeros($arr);
    echo "</pre><br>";

?>