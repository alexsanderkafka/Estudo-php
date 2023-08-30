<?php
    $text = "Essa é uma string muito grande, ela tem vários caracteres";

    for($i = 0; $i < strlen($text); $i++){   
        echo "$text[$i] <br>";
    }
?>