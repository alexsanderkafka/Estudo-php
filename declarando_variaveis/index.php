<?php

    $nome = "Alex";
    echo "$nome <br>";

    $num = 10;
    echo "$num <br>";

    $_nome = "Maria";
    echo "$_nome <br>";

    $velocidaMaxima = 100;
    echo "$velocidaMaxima <br>";

    $text = "É um texto";
    $numero = 500342114;
    $numeroFloat = 10.5;

    echo "<br>$text <br>";
    echo "$numero <br>";
    echo "$numeroFloat <br>";

    echo "<br>";

    $numberOne = 5;
    $numberTwo = 10;
    $sum = $numberOne + $numberTwo;
    echo "$numberOne <br>";
    echo "$numberTwo <br>";
    echo "Soma dos dois números anteriores: $sum <br><br>";

    //var de var
    $teste = "nome";
    echo "$teste <br>";
    $$teste = "Maria";
    echo "$nome <br>";

    // var por referência
    $x = 4;
    $y =& $x;
    echo "<br> $x <br>";
    echo "$y <br>";
    $y = 10;
    echo "Atribuição após ref";
    echo "<br> $x<br>";
    echo "$y <br>";

    echo "Atribuição após ref 2";
    $x = 20;
    echo "<br> $x<br>";
    echo "$y <br><br>";

    //escopo local
    $x = 20;
    echo "Global: $x <br>";
    echo test();
    echo testTwo();
    
    function test(){
        $x = 5;
        return "Local: $x <br>";
    }

    function testTwo(){
        $x = 900904;
        return "Local 2: $x";
    }

?>