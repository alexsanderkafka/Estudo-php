<?php
    $carro = ["Jaguar", "3.0", "Azul", "18", "Teto solar", "automático"];
    print_r($carro);
    echo "<br><br>";

    list($marca, $motor, $cor, $roda, $teto, $cambio) = $carro;
    echo "$marca <br>";
    echo "$motor <br>";
    echo "$cor <br>";
    echo "$roda <br>";
    echo "$teto <br>";
    echo "$cambio <br>";
?>