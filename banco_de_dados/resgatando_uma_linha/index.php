<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $con = new mysqli($host, $user, $pass, $db);

    $id = 4;
    $sql = "SELECT * FROM itens WHERE id = ?";
    
    $stmt = $con->prepare($sql);

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $resultado = $stmt->get_result();
    $data = $resultado->fetch_row();
    
    print_r($data);

    $con->close();
?>