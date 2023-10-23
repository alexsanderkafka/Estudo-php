<?php
    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $sql = "INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)";

    $stmt = $conn->prepare($sql);

    $nome = "Suporte monitor";
    $descricao = "O suporte está novo e na caixa ainda.";

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);

    $stmt->execute();
?>