<?php
    function maiorElemento($arr){
        $maior = max($arr);
        return $maior;
    }

    $arr = range(90, 1, -3);
    shuffle($arr);
    echo maiorElemento($arr) . "<br>";
?>