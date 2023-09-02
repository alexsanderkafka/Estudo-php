<?php
    $string = "Esta é a minha string";
    $minha = substr($string, 10, 5);
    echo "$string <br>";
    echo "$minha <br>";

    $string2 = "Testando esta string abc";
    $novaString = substr($string2, 9);
    echo "$novaString <br>";

    $novaString2 = substr($string2, 8, -3);
    echo "$novaString2 <br>";
?>