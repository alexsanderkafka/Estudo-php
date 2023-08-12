<?php

   // Idêntico: === / tipo e valor são iguais
   // Não idêntico: !== 

   $num = 5;
   $num2 = 2.2;
   $num3 = 10;
   $nome = "Maria";
   $text = "5";

   //Igualdade
   if($num == $num2){
        echo $num . " é igual a " . $num2 . "<br><br>";
   }
   else{
    echo $num . " não é igual a " . $num2 . "<br><br>";
   }

   if(2 == 2){
        echo "2 é igual a 2 <br><br>";
   }

   //Idêntico
   if($num == $text){
        echo "É true <br><br>";
   }

   if($num === $text){
        echo $num . " é igual a " . $text . "<br><br>";
   }
   else{
    echo $num . " é um int e " . $text . " é uma string<br><br>";
   }

   //Diferença
   if($num != $num2){
        echo "$num é diferente de $num2 <br><br>";
   }

   if(5 != 5){
        echo "5 é diferente de 5 <br><br>";
   }
   else{
        echo "5 é igual a 5 <br><br>";
   }

   //Não idêntico
   if(5 !== 5){
        echo "5 é diferente de 5 em uma string <br><br>";
   }
   if($num !== $text){
        echo $num . " é um int então ele é diferente de " . $text . " que é uma string <br><br>";
   }

   // ==, !=, ===, !==
   $numero = 5;
   $numero2 = 3;
   if($numero == $numero2){
        echo $numero . " é igual a " . $numero2 . "<br><br>";
   }
   else{
        echo $numero . " não é igual a " . $numero2 . "<br><br>";
   }
   if($numero != $numero2){
        echo $numero . " é diferente de " . $numero2 . "<br><br>";
   }
   else{
        echo $numero . " não é diferente de " . $numero2 . "<br><br>";
   }
   if($numero === $numero2){
        echo "$numero é idêntico ao $numero2 <br><br>" ;
   }
   else{
        echo "$numero não é idêntico ao $numero2 <br><br>";
   }
   if($numero !== $numero2){
        echo "$numero é não idêntico ao $numero2 <br><br>";
   }
   else{
        echo "$numero é idêntico ao $numero2 <br><br>";
   }

   // Operador maior ou maior e igual > ou >=
   if($num >= $num2){
        echo "$num é maior que $num2 <br><br>";
   }


   if ("c" >= "b"){
        echo "c é maior que b <br><br>";
   }

   if (5 >= 5){
        echo "5 é maior ou maior igual a 5 <br><br>";
   }

   //Operador menor ou menor igual a < / <=
   if($num2 <= $num){
        echo "$num2 é menor ou igual a $num <br><br>";
   }
   if("b" <= "c"){
        echo "b é menor ou menor igual a c <br><br>";
   }

   if(4 <= 4){
        echo "4 é menor ou menor igual a 4 <br><br>";
   }

   //Operadores Lógicos AND (&&), OR (||) e NOT (!)
   echo "<br> OPERADORES LÓGICOS AND, OR E NOT <br>";
   echo "--------------Operador AND-------------- <br>";
   if(5 > 2 && 10 < 100){
        echo "É TRUE <br><br>";
    }
    if(50 > 2 && 10 >= 5){
        echo "É TRUE <br><br>";
    }

    if(50 > 100 && 2 <= -10){
        echo "É TRUE <br><br>";
    }
    else{
        echo "É FALSE <br><br>";
    }

    $a = 10;
    $b = 5;
    $c = 12;
    $d = 12;

    if($a >= $b && $c == $d){
        echo "É TRUE <br><br>";
    }

    if($b <= $a && $c >= $d){
        echo "É TRUE <br><br>";
    }

    if($b === $a && $c > $d){
        echo "É TRUE <br><br>";
    }
    else{
        echo "É FALSE<br><br>";
    }

    if(($b <= $a && $c >= $d) && ($a >= $b && $c == $d)){
        echo "É TRUE <br><br>";
    }

    $nome = "João";
    $a = 15;
    $b = 5;
    $c = 3;

    if($a > $b && "João" === $nome){
        echo "É TRUE<br><br>";
    }

    if("teste" > 5 && 1){
        echo "É  2TRUE<br><br>";
    }
    else{
        echo "É FALSE <br><br>";
    }

    if(2 == $c && $b >= $c){
        echo "É TRUE <br><br>";
    }
    else{
        echo "É FALSE <br><br>";
    }

    //OPERADOR OR
    echo "-------------- OPERADOR OR ------------<br>";
    if (5 > 15 || "teste" == "teste"){
        echo "É TRUE <br><br>";
    }

    if (5 < 15 || "teste" == "teste"){
        echo "É TRUE <br><br>";
    }

    if (5 > 15 || "maria" == "teste"){
        echo "É TRUE <br><br>";
    }
    else{
        echo "É FALSE <br><br>";
    }

    if (5 > 2 || 3 < 4){
        echo "É TRUE <br><br>";
    }

    if (5 > 2 || 30 < 4){
        echo "É TRUE <br><br>";
    }

    if (-4 > 2 || 100 > 4){
        echo "É TRUE <br><br>";
    }

    if (-4 > -100 || 1000 < 400){
        echo "É TRUE <br><br>";
    }
    else{
        echo "É FALSE <br><br>";
    }

    $a = 10;
    $b = 20;
    $c = 30;
    $d = 40;

    if ($a > $b || $d > $c){
        echo "É TRUE <br><br>";
    }

    if((2 == $c && $b >= $c) || ($a > $b || $d > $c)){
        echo "É TRUE <br><br>";
    }

    if((2 == $c && $b >= $c) || (5 > 15 || "maria" == "teste")){
        echo "É TRUE <br><br>";
    }
    else{
        echo "É FALSE<br><br>";
    }

    if(12 < 5 || "João" === "João"){
        echo "É TRUE <br><br>";
    }

    if(1 > 5 || 1){
        echo "É TRUE <br><br>";
    }

    if(20 === "20" && 51 >= 31){
        echo "É TRUE <br><br>";
    }
    else{
        echo "É FALSE <br><br>";
    }

    //OPERADOR NOT
    echo "-------------- OPERADOR NOT ------------<br>";
    if(!(5 > 2)){
        echo "É TRUE <br><br>";
    }
    else{
        echo "É FALSE <br><br>";
    }

    if(!true){
        echo "É TRUE<br><br>";
    }
    else{
        echo "É FALSE <br><br>";
    }

    if(!(50 < 2)){
        echo "É TRUE <br><br>";
    }

    if(!($a >= $b)){
        echo "É TRUE<br><br>";
    }
?>