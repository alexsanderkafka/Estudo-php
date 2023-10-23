<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $con = new mysqli($host, $user, $pass, $db);

    $id = 10;
    $sql = "UPDATE itens SET nome = ?, descricao = ? WHERE id = ?";
    
    $nome = "Sofá";
    $descricao = "Sofá semi novo, com madeira de demolição";;

    $stmt = $con->prepare($sql);

    $stmt->bind_param("ssi", $nome, $descricao,$id);

    $stmt->execute();

    if($stmt->error){
        echo "Erro: " . $stmt->error;
    }

    $con->close();
?>