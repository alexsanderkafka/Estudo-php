<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $con = new mysqli($host, $user, $pass, $db);

    $sql = "SELECT * FROM itens";

    $result = $con->query($sql);
    
    //UM RESULTADO
    $item = $result->fetch_array();

    //TODOS OS RESULTADOS
    $itens = $result->fetch_all();

    print_r($item);
    echo "<br><br><br>";

    print_r($itens);
    echo "<br><br><br>";

    $con->close();
?>