<?php

    function somaElementos($array){
        $soma = array_sum($array);
        return $soma;
    }

    $arr = [2, 10, 10];
    echo somaElementos($arr) . "<br>";
?>