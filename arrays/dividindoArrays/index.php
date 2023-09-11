<?php
    $arr = range(1, 20);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>";

    echo "<pre>";
    print_r(array_chunk($arr, 4));
    echo "</pre>";
    echo "<br>";

    $arrs = array_chunk($arr, 10);
    echo "<pre>";
    print_r(array_chunk($arrs, 2));
    echo "</pre>";
    echo "<br>";
?>