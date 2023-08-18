<?php

    if(5 > 2){
        echo "5 é maior que 2<br><br>";
    }

    if(5 > 2 && 2 < 5){
        echo "É verdade <br><br>";
    }

    if(2 >= 5){
        echo "Não<br><br>";
    }
    else{
        echo "É false <br><br>";
    }

    if( 10 === 10 && 9 > 3){
        echo "Deu verdade <br><br>";
    }

    $a = 10;
    $b = 5;

    if($a > $b){
        echo "Esse bloco é verdade <br><br>";
    }

    $a = 5;
    $b = 2;
    if($a > $b){
        echo "Esse bloco é true<br><br>";
    }
    else{
        echo "Esse bloco é false<br><br>";
    }

    $nome = "Pedro";
    $nome2 = "Matheus";

    if($nome != $nome2){
        echo "Esse bloco é true<br><br>";
    }

    $numero = 12;
    $numero2 = 11;

    if($numero <= $numero2){
        echo "Esse bloco é true<br><br>";
    }
    else{
        echo "Esse é bloco é false<br><br>";
    }

    $idade1 = 20;
    $idade2 = 18;
    $idade3 = 9;

    if($idade1 >= 18 && $idade2 >= 18 && $idade3 >= 18){
        echo "Esse é bloco é true<br><br>";
    }
    else{
        echo "Esse é bloco é false<br><br>";
    }

    if($idade1 >= 18){
        echo "Esse bloco é true<br><br>";
    }

    if($idade2 >= 18){
        echo "Esse bloc é true<br><br>";
    }

    if($idade3 >= 18){
        echo "Esse bloco é true<br><br>";
    }
    else{
        echo "Esse bloco é false<br><br>";
    }

?>