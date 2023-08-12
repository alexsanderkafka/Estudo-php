<?php

    //OPERADOR cast
    echo "-------------- OPERADOR cast ------------<br>";
    $texto = "4.432";
    echo "É uma string $texto <br>";
    echo gettype($texto) . "<br><br>";
    $a = (float) $texto;
    echo "É um float $a <br>";
    echo gettype($a) . "<br><br>";

    $text = "3124321";
    echo "$text é uma string <br>";
    echo gettype($text) . "<br><br>";
    $a = (int) $text;
    echo "$a é um int <br>";
    echo gettype($a) . "<br><br>";


    echo "-------------- CAST DE STRING ------------<br>";
    $text = "testando";
    echo "$text é uma string // " . gettype($text) . "<br><br>";
    $convert = (int) $text;
    echo "$convert é um int // " . gettype($convert) . "<br><br>";

    echo "-------------- CAST DE DOUBLE/FLOAT ------------<br>";
    $num = 12.9;
    echo "$num é uma float/double // " . gettype($num) . "<br><br>";
    $convert = (int) $num;
    echo "$convert é um int // " . gettype($convert) . "<br><br>";

    echo "-------------- CAST DE BOOLEAN ------------<br>";
    $cond = true;
    echo "$cond é um bool // " . gettype($cond) . "<br><br>";
    $convert = (int) $cond;
    echo "$convert é um int // " . gettype($convert) . "<br><br>";

    echo "-------------- CAST DE ARRAY ------------<br>";
    $arr = [1, 2, 3];
    echo "$cond é um array// " . gettype($arr) . "<br><br>";
    $convert = (int) $arr;
    echo "$convert é um int // " . gettype($convert) . "<br><br>";

?>