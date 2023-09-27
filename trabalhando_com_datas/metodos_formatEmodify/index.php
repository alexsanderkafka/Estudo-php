<?php
    $data = new DateTime();
    print_r($data);
    echo "<br><br>";

    echo $data->format('d/m/y') . "<br>";

    echo $data->format('D - M - Y') . "<br>";

    // Segue os mesmos parâmetros do date();

    echo $data->format('l - F - Y') . "<br>";

    // Data mais modificada
    $data->modify('+5 days');
    echo $data->format('d/m/y') . "<br>";

    $data->modify('+2 months');
    echo $data->format('d/m/y') . "<br>";

    $data->modify('-3 years');
    echo $data->format('d/m/y') . "<br>";
?>