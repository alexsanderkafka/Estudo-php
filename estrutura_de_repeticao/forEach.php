<?php

    $arr = [1, 2, 3, 4, 5, 6];
    foreach($arr as $item){
        echo "$item <br>";
    }

    echo "<br>Outro for each <br>";
    $arr = ["Nome", "Maria", "Oi", "Fala tu"];
    foreach($arr as $item){
        if($item === "Maria"){
            echo "Opa <br>";
        }
        echo "$item <br>";
    }

?>