<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $con = new mysqli($host, $user, $pass, $db);

    /*
    $sql = "CREATE TABLE teste (
        id INT UNSIGNED AUTO_INCREMENT,
        nome VARCHAR(100) NOT NULL,
        sobrenome VARCHAR(100) NOT NULL,
        PRIMARY KEY(id)
    )";*/

    $sql = "DROP TABLE teste";

    $con->query($sql);

    $con->close();
?>