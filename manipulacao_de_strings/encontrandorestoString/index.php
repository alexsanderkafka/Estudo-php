<?php

    $string = "Testando o resto da string, pra ver e dá certo";
    $teste = strstr($string, "resto");

    echo "$teste <br>";
    echo strstr($string, "string") . "<br>";

    if(strstr($string, ".NET") === false){
        echo "Não encontramos a string <br>";
    }
?>