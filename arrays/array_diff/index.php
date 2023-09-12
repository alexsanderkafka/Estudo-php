<?php
    $arr1 = [1, 2, 3];
    $arr2 = [2, 4, 6];

    print_r($arr1);
    echo "<br>";
    print_r($arr2);
    echo "<br>";

    $arrDiff = array_diff($arr1, $arr2);
    print_r($arrDiff);
    echo "<br>";

    $arrDiff2 = array_diff($arr2, $arr1);
    print_r($arrDiff2);
    echo "<br>";

    $arr3 = [4, 6];

    $arrDiff3 = array_diff($arr2, $arr1, $arr3);
    print_r($arrDiff3);
    echo "<br>";
?>