<?php  

    //Faz a soma de todos os item do array

    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 8, 9];
    
    function soma($a, $b){
        return $a + $b;
    }

    $resultado = array_reduce($arr, "soma");
    echo "$resultado <br>";
    
?>