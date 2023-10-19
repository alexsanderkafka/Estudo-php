<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $con = new mysqli($host, $user, $pass, $db);

    $table = "itens";
    $nome = "Xícara";
    $descricao = "É uma xícara usada de cor rosa";

    $sql = "INSERT INTO $table (nome, descricao)
            VALUES ('$nome', '$descricao')";

    $con->query($sql);

    $con->close();
?>