<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $con = new mysqli($host, $user, $pass, $db);

    $sql = "SELECT * FROM itens";

    $result = $con->query($sql);

    print_r($result);
    echo "<br>";
    
    $con->close();
?>