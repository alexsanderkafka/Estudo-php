<?php
    $string = "carro - navio - helicóptero - barco - jangada";
    $arr = explode("-", $string);

    echo "<h1> $string </h1>";
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    echo "<br>";
    foreach($arr as $item){
        echo "$item <br>";
    }
?>