<?php
    function sumDigits($num){
        $sum = 0;
        if(!is_int($num) || $num < 0){
            return "Não é possível realizar o calculo";
        }
        $numString = (string) $num;
        for($i = 0; $i < strlen($numString); $i++){
            $sum += (int) $numString[$i];
        }
        return $sum;
    }

    echo sumDigits(-123456789) . "<br>";
    echo sumDigits(123456789) . "<br>";
    echo sumDigits(true) . "<br>";
    echo sumDigits(3223.3434) . "<br>";
    echo sumDigits(-3223.3434) . "<br>";
?>