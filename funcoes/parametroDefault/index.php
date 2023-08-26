<?php
    function teste($a = "teste"){
        echo "O valor do parâmetro é: $a <br>";
    }

    teste();
    teste("123123");

    function testeOutra($b, $a = "x"){ //coloque o parâmetro default por último
        echo "O valor do primeiro parâmetro é: $a<br>";
        echo "O valor do segundo parâmetro é: $b<br>";
    }

    testeOutra("asadf");
    testeOutra("Olá", 213123);
?>