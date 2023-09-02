<?php
    $arr = ["Maça", "Pera", "Mamão", "Batata"];
    $string = implode(", ", $arr);

    echo "$string <br>";

    $arr2 = ["Avião", "Tanque", "Jipe", "Metralhadora"];
    $string2 = implode(" <-> ", $arr2);
    echo "$string2 <br>";
?>