<?php
    function soma($num1, $num2){
        $calc = $num1 + $num2;
        return $calc;
    }

    function teste(){
        return "Olá";
    }

    function elevaQuadrado($num){
        $calc = $num ** 2;
        return $calc;
    }

    function definiNewArray($arr){

        $newArr = [];

        for($i = 0; $i < sizeof($arr); $i++){
            if($arr[$i] > 7){
                array_push($newArr, $arr[$i]);
            }
        }

        return $newArr;
    }

    $retornoFuncao = soma(2, 4);
    echo "$retornoFuncao <br>";

    $calc = soma(2, 3) + soma(10, 10);
    echo "$calc <br>";

    $teste = teste();
    echo "Teste --> $teste <br>";

    $numero = 900;
    echo elevaQuadrado($numero) . "<br>";

    echo elevaQuadrado(2) . "<br>";

    $num = elevaQuadrado(10);
    echo "$num <br>";

    $arr = [];
    for($i = 0; $i < 10; $i++){
        array_push($arr, $i);
    }
    $newArr = definiNewArray($arr);
    print_r($newArr);
    echo "<br>";
    foreach($newArr as $item){
        echo "$item <br>";
    }
    
    function sumEvenNumbers($num){
        $sum = 0;
        for($i = 1; $i <= $num; $i++){
            if($i % 2 == 0){
                $sum = $sum + $i;
            }
        }
        return $sum;
    }
    
    
    $numero = 10;
    $soma = sumEvenNumbers($numero);
    echo "$soma <br>";
?>