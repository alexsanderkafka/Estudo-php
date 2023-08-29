<?php
    function isPrime($num){
        if($num < 2){
            return false;
        }
        else{
            $cont = 0;
            for($i = 1; $i <= $num; $i++){
                if($num % $i == 0){
                    $cont++;
                }
            }
            if($cont === 2){
                return true;
            }
            else{
                return false;
            }
        }
    }

    $primo = isPrime(5);
    if($primo == true){
        echo "Esse número é primo";
    }
    else{
        echo "Não é primo";
    }
?>