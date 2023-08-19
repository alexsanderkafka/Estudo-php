<?php

    for($i = 0; $i < 10; $i++){
        echo "Testando for $i <br>";
    }

    echo "<br> Testando outro for<br>";
    for($i = 10; $i > 0; $i--){
        echo "Testando for $i <br>";
    }

    echo "<br> Testando outro for<br>";
    for($i = 10; $i > 0; $i--){
        echo "Testando for $i <br>";
        if($i == 8){
            echo "Utilizando o break";
            break;
        }
    }

    echo "<br><br>Utilizando array com for<br>";
    $numeros = [1, 2, 3, 4, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
    for($i = 0; $i < sizeof($numeros); $i++){
        if($numeros[$i] % 2 == 0){
            echo "Esse número é par $numeros[$i]<br>";
        }
    }

    echo "<br><br>Utilizando outro array com for<br>";
    $numeros2 = [];
    for($i = 1; $i <= 10; $i++){
        array_push($numeros2, $i);
    }
    print_r($numeros2);

    echo "<br><br>Utilizando outro array com for<br>";
    $arr = [];
    for($i = 10; $i <= 20; $i++){
        array_push($arr, $i);
    }

    for($i = 0; $i < sizeof($arr); $i++){
        if($arr[$i] % 2 != 0){
            echo "Esse número é ímpar $arr[$i]<br>";
        }
    }

?>