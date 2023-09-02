<?php
    $string = "Teste";
    $outraString = str_repeat($string, 10);

    echo "$string <br>";
    echo "$outraString <br>";

    $frase = "Testando repeticao por frase";
    echo str_repeat($frase, 100000 * 10);
?>