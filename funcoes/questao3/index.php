<?php
    function itemSuperMarket($arr){
        $textItems = "";
        for($i = 0; $i < count($arr); $i++){
            if($i + 1 == count($arr)){
                $textItems .= "$arr[$i].";
            }
            else{
                $textItems .= "$arr[$i], ";
            }
        }
        return $textItems;
    }

    $arr = ["Morango", "Carne", "Feijão", "Arroz", "Café", "Sal"];
    $newString = itemSuperMarket($arr);
    echo "$newString <br>";
?>
