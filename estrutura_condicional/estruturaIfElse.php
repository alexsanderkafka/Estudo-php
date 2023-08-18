<?php

    $text = "É true<br><br>";
    $text2 = "Entrou no else<br><br>";
    if(5 > 2){
        echo $text;
    }
    else{
        echo $text2;
    }

    if("teste" === 5){
        echo $text;
    }
    else{
        echo $text2;
    }

    $a = 10;
    $b = 20;
    if($a > $b){
        echo $text;
    }
    else{
        echo $text2;
    }

    $nome = "Maria";
    $numero = 31432;
    $teste = true;

    if(is_int($nome)){
        echo "A variável é um inteiro<br><br>";
    }
    else{
        echo "Não é inteiro<br><br>";
    }

    if(is_int($numero)){
        echo "A variável é um inteiro<br><br>";
    }
    else{
        echo "A variável não é inteiro<br><br>";
    }

    if(is_int($teste)){
        echo "A variável é um inteiro<br><br>";
    }
    else{
        echo "A variável não é um inteiro<br><br>";
    }

    $peso = 80.5;
    if($peso > 80){
        echo "Pesado demais<br><br>";
    }
    else{
        echo "Peso dentro do limite<br><br>";
    }

?>