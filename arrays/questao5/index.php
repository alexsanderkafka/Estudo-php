<?php

    $cor = "Amarela";
    $tamanho = 4.4;
    $peso = 10.5;
    $ano = 1993;

    $objeto = compact("cor", "tamanho", "peso", "ano");
    print_r($objeto);
    echo "<br><br>";

    foreach($objeto as $key => $value){
        echo "$key: $value <br>";
    }
?>