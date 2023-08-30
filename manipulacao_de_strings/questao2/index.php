<?php
    $text = "O rato roeu a roupa do rei de Roma";
    $cont = 0;
    for($i = 0; $i < strlen($text); $i++){
        if(strtolower($text[$i]) == "a"){
            $cont++;
        }
    }

    echo "Tem $cont letras a<br>";
?>