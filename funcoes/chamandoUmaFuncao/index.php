<?php

    function soma(){
        $a = 5;
        $b = 10;
        echo $a + $b . "<br>";
    }

    function multi($num1, $num2, $num3){
        $calc = $num1 * $num2 * $num3;
        echo "$calc <br>";
    }

    function fullName($name, $lastName){
        echo "$name $lastName <br>";
    }

    echo strtoupper("maria") . "<br>";
    $a = strlen("Opa");
    echo "$a <br>";
    echo strtolower("OPA, TUDO BEM <br>");
    print_r("oi");
    echo "<br>";

    soma();
    soma();

    $arr = ["Olá", "Quem é você?", "What's up?", "Lost track of time"];
    $usandoFuncao = implode(", ", $arr);
    echo "$usandoFuncao <br>";

    $num1 = 10;
    $num2 = 100;
    $num3 = 1000;

    multi($num1, $num2, $num3);

    $name = "Maria";
    $lastName = "Silva De Souza da Silva";
    fullName($name, $lastName);

?>