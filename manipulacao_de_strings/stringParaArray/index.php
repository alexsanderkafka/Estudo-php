<?php

    $frase = "Testando o explode";
    $fraseArray = explode(" ", $frase);
    print_r($fraseArray);
    
    echo "<br>";

    $fraseArray2 = explode(",", $frase);
    print_r($fraseArray2);

    echo "<br>";
    $outraFrase = "Carro, Avião, Barco, Navio";
    $fraseArrayOutra = explode(",", $outraFrase);
    print_r($fraseArrayOutra);

    for($i = 0; $i < count($fraseArrayOutra); $i++){
        echo "$fraseArrayOutra[$i] <br>";
    }
?>