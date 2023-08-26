<?php
    function countVoewls(string $text){
        $somaVogais = 0;
        for($i = 0; $i < strlen($text); $i++){
            if(strtolower($text[$i]) == "a" || strtolower($text[$i]) == "e" || $text[$i] == "i" || strtolower($text[$i]) == "o" || strtolower($text[$i]) == "u"){
                $somaVogais++;
            }
        }
        return $somaVogais;
    }

    $amountVoewls = countVoewls("aaaaalExiUoO");
    echo "$amountVoewls <br>";
?>