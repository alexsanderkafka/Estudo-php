<?php

    $x = 0;
    while($x < 10){
        echo $x . "<br>";
        $x++;
    }
    echo "<br>Outro while<br><br>";

    $y = 0;
    while($y < 10){
        echo $y . "<br>";
        $y += 2;
    }
    echo "<br>Outro while<br><br>";

    $z = 10;
    while($z > 0){
        echo $z . "<br>";
        $z--;
    }
    echo "<br>Outro while<br><br>";

    $a = 10;
    while($a > 0){
        if($a % 2 != 0){
            echo $a . "<br>";
        }
        $a--;
    }
    echo "<br>Outro while<br><br>";

    $arrays = [10, "Maria", 9.9, true, "João", "Silva", "true", false, "109340", 9.91434];
    $i = 0;
    while($i < sizeof($arrays)){
        if(is_string($arrays[$i])){
            echo $arrays[$i] . "<br>";
        }
        $i++;
    }

    echo "<br> USANDO O BREAK<br>";
    $x = 0;
    while($x < 10){
        echo "O x é $x <br>";
        if($x === 5){
            echo "Terminado o loop<br>";
            break;
        }
        $x++;
    }
    echo "Saiu do loop <br><br>";

    $cont = 4;
    while($cont <= 30){
        echo "Cont = $cont<br>";
        if($cont === 24){
            echo "Loop chegou ao número 24, saindo do loop <br>";
            break;
        }
        $cont += 2;
    }
    echo "Fora do loop<br<br>"


?>