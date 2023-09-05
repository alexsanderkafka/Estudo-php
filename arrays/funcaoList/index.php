<?php
    $pessoa = ["Maria", 29, "Programador", "verde"];
    print_r($pessoa);
    echo "<br><br>";

    list($nome, $idade, $profissao, $corDaShirt) = $pessoa;

    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
    echo "$corDaShirt <br>";
?>