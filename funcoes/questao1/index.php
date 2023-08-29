<?php

    function defineCorCarro($cor = "red"){
        return "A cor do carro é $cor";
    }

    echo defineCorCarro();
    $cor = defineCorCarro("green");
    echo "$cor <br>";
?>