<?php

    $arr = [
        "cor" => "vermelho",
        "forma" => "retângular",
        "material" => "aço"
    ];
    print_r($arr);
    echo "<br>";

    extract($arr);
    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";

    $nome = "Maria";
    echo "$nome <br>";

    $pessoa = [
        "nome" => "Silva",
        "idade" => 20
    ];
    print_r($pessoa);
    echo "<br>";
    
    extract($pessoa);
    echo "$nome <br>";
    echo "$idade <br>";
?> 