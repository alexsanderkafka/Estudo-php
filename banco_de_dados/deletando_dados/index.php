<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $con = new mysqli($host, $user, $pass, $db);

    $sql = "DELETE FROM itens WHERE nome = ?";
    
    $nome = "Sofá";

    $stmt = $con->prepare($sql);

    $stmt->bind_param("s", $nome);

    $stmt->execute();

    if($stmt->error){
        echo "Erro: " . $stmt->error;
    }

    $con->close();
?>