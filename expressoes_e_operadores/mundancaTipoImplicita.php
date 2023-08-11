<?php

    echo 5 / 2;
    echo "<br>";

    if (is_float(5 / 2)){
        echo "É float <br>";
    }

    echo 2 . 3; // 2 . 3

    if(is_string(2 . 3)){
        echo "<br>É string <br>";
    }

    $name = "João";
    $lastName = "Silva";

    $fullName = $name . " " . $lastName;
    echo $fullName;
    echo "<br>";

    $teste = "5" * 12;
    echo "$teste <br>";
    echo gettype($teste);
    echo "<br>";
?>