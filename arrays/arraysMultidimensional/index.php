<?php
    $matrix = [
        [1, 2, 3],
        [2, 4, 6],
        [7, 8, 10]
    ];

    print_r($matrix);
    echo "<br>";

    echo $matrix[0][0] . "<br>";
    echo $matrix[0][1] . "<br>";
    echo $matrix[0][2] . "<br>";
    echo $matrix[1][2] . "<br>";

    echo "<h1>Usando for</h1>";
    for($i = 0; $i < count($matrix); $i++){
        for($j = 0; $j < count($matrix[$i]); $j++){
            echo $matrix[$i][$j] . "     ";
        }
        echo "<br>";
    }
?>