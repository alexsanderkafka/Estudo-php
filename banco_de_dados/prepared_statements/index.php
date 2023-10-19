<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $con = new mysqli($host, $user, $pass, $db);

    $nome = "Suporte de microfone";
    $descricao = "O suporte é novo";

    $sql = $con->prepare("INSERT INTO itens (nome, descricao)
                          VALUES (?, ?)");

    $sql->bind_param("ss", $nome, $descricao); //s = string, i = integer, d = double

    $sql->execute();

    //$con->close();
?>