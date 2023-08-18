<?php

    function verificarAcesso(int $idade, bool $aut){
        if($idade >= 18 && $aut === true){
            return "Acesso autorizado";
        }
        else if($idade >= 18 && $aut === false){
            return "Acesso negado. Autorização necessária";
        }
        else if($idade < 18){
            return "Acesso negado. Idade mínima requerida: 18 anos";
        }
    }

    echo verificarAcesso(18, true);
    echo "<br><br>";
    echo verificarAcesso(20, false);
    echo "<br><br>";
    echo verificarAcesso(17, true);
    echo "<br><br>";

?>