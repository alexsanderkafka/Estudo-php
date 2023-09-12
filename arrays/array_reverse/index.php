<?php
    //Não alterea a estrutura original
    //Retorna um novo valor

    $arr = [1, 2, 3, 4, 5];
    echo "<pre>";
    print_r($arr);
    echo "</pre><br>";

    $arrReverse = array_reverse($arr);
    echo "<pre>";
    print_r($arrReverse);
    echo "</pre><br>";

    $arr2 = ["Maria", 12, true, [1, 2]];
    echo "<pre>";
    print_r($arr);
    echo "</pre><br>";

    $arrReverse2 = array_reverse($arr2);
    echo "<pre>";
    print_r($arrReverse2);
    echo "</pre><br>";
?>