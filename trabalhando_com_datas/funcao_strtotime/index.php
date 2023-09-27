<?php
    // Recebe uma string e tenta transformar em data
    // Transforma em unix time
    $cincoDias = strtotime("5 days");

    echo "$cincoDias <br>";

    $dezDias = strtotime("10 days");

    echo "$dezDias <br>";

    $dataAtualMaisCinco = date("d/m/y", $cincoDias);
    echo "$dataAtualMaisCinco <br>";

    $dataAtualMaisDez = date("d/m/y", $dezDias);
    echo "$dataAtualMaisDez  <br>";

    $doisMeses = strtotime("2 months");
    echo "$doisMeses <br>";
    $dataAtualMaisDoisMeses = date("d/m/y", $doisMeses);
    echo "$dataAtualMaisDoisMeses   <br>";

    $dozeAnos = strtotime("12 years");
    echo "$dozeAnos <br>";
    echo date("d/m/y", $dozeAnos) . "<br>";
?>