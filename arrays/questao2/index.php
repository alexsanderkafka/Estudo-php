<?php
    $matrix = [
        [1, 2, 3, 5],
        [1, 2, 1, 3],
        [9, 7, 6, 4]
    ];

    for($i = 0; $i < count($matrix); $i++){
        for($j = 0; $j < count($matrix[$i]); $j++){
            echo $matrix[$i][$j] . "<br>";
        }
    }
?>