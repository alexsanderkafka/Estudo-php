<?php

    if(10 > 2){
        echo "Entrou no primeiro if <br><br>";
        if("teste" === "teste"){
            echo "Entrou no segundo if<br><br>";
        }
    }

    if(10 > 2){
        echo "Entrou no primeiro if <br><br>";
        if("teste" != "teste"){
            echo "Entrou no segundo if<br><br>";
        }
        else{
            echo "Entrou no segundo else<br><br>";
        }
    }

    $escopo = 10;
    if(10 > 2){
        echo "Entrou no primeiro if <br><br>";
        if("teste" === "teste"){
            echo "Entrou no segundo if<br><br>";
            echo $escopo . "<br><br>";
        }
        else{
            echo "Entrou no segundo else<br><br>";
        }
    }
    else{
        echo "Entrou no primeiro else <br><br>";
    }

    $numero = 100;
    $numero2 = 2.2;
    $nome = "Nome";
    $nome2 = "Silva";

    if(is_numeric($numero)){
        $calc = $numero * 2;
        echo "$calc <br><br>";
        if($calc >= 100){
            echo "É maior que 100<br><br>";
        }
        else{
            echo "Não é maior que 100<br><br>";
        }
    }
    else{
        echo "Não é um número<br><br>";
    }

    if(is_numeric($numero2)){
        $calc = $numero2 * 2;
        echo "$calc <br><br>";
        if($calc >= 100){
            echo "É maior que 100<br><br>";
        }
        else{
            echo "Não é maior que 100<br><br>";
        }
    }
    else{
        echo "Não é um número<br><br>";
    }

    if(is_numeric($nome)){
        $calc = $nome * 2;
        echo "$calc <br><br>";
        if($calc >= 100){
            echo "É maior que 100<br><br>";
        }
        else{
            echo "Não é maior que 100<br><br>";
        }
    }
    else{
        echo "Não é um número<br><br>";
    }

    if(is_numeric($nome2)){
        $calc = $nome2 * 2;
        echo "$calc <br><br>";
        if($calc >= 100){
            echo "É maior que 100<br><br>";
        }
        else{
            echo "Não é maior que 100<br><br>";
        }
    }
    else{
        echo "Não é um número<br><br>";
    }
?>