<?php
    $dateA = new DateTime();
    print_r($dateA);
    echo "<br>";
    $dateB = new DateTime();
    print_r($dateB);
    echo "<br>";

    $dateB->setDate(2001, 10, 15);

    print_r($dateB);
    echo "<br><br>";

    $dateDiff = $dateA->diff($dateB);
    print_r($dateDiff);
    echo "<br>";
    echo $dateDiff->format("%a days") . "<br>";
?>