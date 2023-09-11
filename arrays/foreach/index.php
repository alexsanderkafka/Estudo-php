<?php

    $maria = [
        "nome" => "Maria",
        "idade" => 90,
        "profissao" => "Programador" 
    ];

    $joao = [
        "nome" => "Joao",
        "idade" => 30,
        "profissao" => "Eng. Civil" 
    ];

    foreach($maria as $key => $value){
        echo "$key: $value <br>";
    }

    echo "<br>";
    
    foreach($joao as $key => $value){
        echo "$key: $value <br>";
    }
?>