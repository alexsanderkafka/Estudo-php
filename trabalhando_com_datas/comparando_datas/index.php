<?php

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB->setDate(2030, 10, 10);

    print_r($dataA);
    echo "<br>";
    print_r($dataB);
    echo "<br>";

    $dataC = new DateTime();
    $dataC->setDate(2030, 10, 10);

    $dataB->setTime(5, 10, 10);
    $dataC->setTime(5, 10, 10);

    if($dataB > $dataA){
        echo "A data B é maior que a data A <br>";
    }

    if($dataA < $dataB){
        echo "A data A é menor que a data B <br>";
    }

    if($dataB == $dataC){//data e hora precisa serem iguais
        echo "As datas A e C são iguais <br>";
    }
?>  