<?php

    //Identifica se um item está no array
    //Retorna false ou true

    $arr = ['banana', 'maça', 'batata', 'pêra', 'mamão'];

    if(in_array("batata", $arr)){
        echo "Há o item batata no array<br>";
    }
    else{
        echo "Não há batata no array <br>";
    }

    $item = "banana";

    if(in_array($item, $arr)){
        echo "Há o item $item no array<br>";
    }
    else{
        echo "Não há $item no array <br>";
    }

    if(in_array("teste", $arr)){
        echo "Há o item teste no array<br>";
    }
    else{
        echo "Não há teste no array <br>";
    }
?>