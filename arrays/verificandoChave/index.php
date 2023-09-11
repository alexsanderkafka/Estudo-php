<?php

    $arr = [
        "nome" => "Maria",
        "idade" => 29
    ];

    print_r($arr);
    echo "<br>";

    if(array_key_exists("nome", $arr)){
        echo "A chave existe! <br>";
    }
    else{
        echo "A chave não existe<br>";
    }

    if(array_key_exists("profissao", $arr)){
        echo "A chave existe! <br>";
    }
    else{
        echo "A chave não existe<br>";
    }

    //isset serve para string too
    if(isset($arr["nome"])){
        echo "A chave existe! <br>";
    }
    else{
        echo "A chave existe! <br>";
    }

    if(isset($arr["teste"])){
        echo "A chave existe! <br>";
    }
    else{
        echo "A chave existe! <br>";
    }
?>