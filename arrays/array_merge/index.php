<?php
    //Une arrays
    $arr1 = [1, 2, 3];
    $arr2 = [10, 40, 90];
    $arr3 = [2.1, 44.5, 43.3];
    $arr4 = ["Maria", "Alex", true];

    print_r($arr1);
    echo "<br>";
    print_r($arr2);
    echo "<br>";
    print_r($arr3);
    echo "<br>";

    $arrMerge = array_merge($arr1, $arr2, $arr3, $arr4);

    print_r($arrMerge);
    echo "<br>";
?>