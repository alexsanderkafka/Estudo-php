<?php
    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $id = 12;
    $nome = "Teclado Razer";
    $descricao = "Este teclado é novo e possui uma caixa";

    $sql = "UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":descricao", $descricao);
    $stmt->bindParam(":id", $id);

    $stmt->execute();
?>