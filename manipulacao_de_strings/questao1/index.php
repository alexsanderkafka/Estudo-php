<?php

    function caracObject($arr){
        $items = [];
        foreach($arr as $keys => $elementos){
            if($elementos > 10){
                array_push($items, $keys);
            }
        }
        return $items;
    }

    $arr = [
        "porta" => 100,
        "macaneta" => 5,
        "motor" => 2000,
        "retrovisor" => 8
    ];

    $teste = caracObject($arr);
    print_r($teste);
?>