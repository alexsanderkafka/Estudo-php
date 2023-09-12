<?php
    
    $arr = [2, 4, 34, 34.1, 324, 12, 34, 2, "oi"];
    echo "<pre>";
    print_r($arr);
    echo "</pre><br>";

    $soma = array_sum($arr);
    
    echo "Soma do array: $soma<br>";
?>