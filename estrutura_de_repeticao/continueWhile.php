<?php

    $a = 10;

    while($a > 0){
        echo "Executando o loop $a<br>";
        if($a == 5 || $a == 7){
            echo "Pulou a execução $a <br>";
            $a--;
            continue;
        }
        if($a == 2){
            echo "Terminando o loop break $a<br>";
            break;
        }
        $a--;
    }

    $numeros = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $i = 0;
    while($i < sizeof($numeros)){
        if($numeros[$i] == 30 || $numeros[$i] == 40){
            //echo "Vai pular o loop $numeros[$i]<br>";
            $i++;
            continue;
        }
        echo "Loop $numeros[$i]<br>";
        $i++;
    }

?>