<?php
    
    function compararNumero(int $num, int $num2){
        if($num == $num2){
            return "Número iguais";
        }
        else if($num > $num2){
            return "$num é maior que $num2";
        }
        else{
            return "$num2 é maior que $num";
        }
    }

    echo compararNumero(2, 2);
    echo "<br><br>";
    echo compararNumero(5, 2);
    echo "<br><br>";
    echo compararNumero(2, 5);
    echo "<br><br>";
?>