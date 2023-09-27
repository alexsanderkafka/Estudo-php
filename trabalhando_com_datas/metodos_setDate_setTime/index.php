<?php
    $data = new DateTime();
    print_r($data);
    echo "<br><br>";

    echo $data->format('d/m/y') . "<br>";

    $data->setDate(1999, 12, 01);
    print_r($data);
    echo "<br><br>";

    echo $data->format('d/m/y') . "<br>";

    $data->setTime(5, 12, 10);
    print_r($data);
    echo "<br><br>";
    
    echo $data->format('d/m/y') . "<br>";
?>