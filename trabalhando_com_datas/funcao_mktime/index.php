<?php
    $dataNascimento = mktime(02, 12, 33, 02, 05, 1991);
    
    echo "$dataNascimento <br>";

    $dataNascimentoFormat = date("d/m/Y", $dataNascimento);
    echo "$dataNascimentoFormat <br>";

    $dataEspecifica = mktime(10, 20, 11, 04, 28, 20);
    $dataFuturaFormat = date("m/d/y", $dataEspecifica);
    echo "$dataFuturaFormat <br>";
?>