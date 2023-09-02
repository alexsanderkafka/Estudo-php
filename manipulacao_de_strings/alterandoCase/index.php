<?php
    $string = "esta string está em caixa baixa <br>";
    echo strtoupper($string);

    $str = "ESTA AQUI EM CAIXA ALTA <br>";
    echo strtolower($str);

    //Primeira letra da string
    $text = "testando o case de uma palavra <br>";
    echo ucfirst($text);

    //Primeira de cada palavra da string
    echo ucwords($text);
?>