<?php
    if(10 > 5){
        echo "Entrou no if<br><br>";
    }
    else if(10 > 6){
        echo "Entrou no else if<br><br>";
    }

    if(10 < 5){
        echo "Entrou no if<br><br>";
    }
    else if(10 > 6){
        echo "Entrou no else if<br><br>";
    }
    else{
        echo "Entrou no else<br><br>";
    }

    if(10 < 5){
        echo "Entrou no if<br><br>";
    }
    else if(10 < 6){
        echo "Entrou no else if<br><br>";
    }
    else{
        echo "Entrou no else<br><br>";
    }

    $velocidade = 100;
    if($velocidade < 40){
        echo "Velocidade correta<br><br>";
    }
    else if($velocidade === 40){
        echo "Tome cuidade <br><br>";
    }
    else{
        echo "Você levou uma multa hahaha<br><br>";
    }

    
?>