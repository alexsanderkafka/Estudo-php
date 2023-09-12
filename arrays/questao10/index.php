<?php

    function encontrarPares($arr){
        $pares = [];
        foreach($arr as $item){
            if($item % 2 === 0){
                $pares[] = $item;
            }
        }
        return $pares;
    }

    $arr = [1, 2, 3, 4];
    $newArray =  encontrarPares($arr);
    print_r($newArray);
    echo "<br>";
?>