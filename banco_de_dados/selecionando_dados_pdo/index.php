<?php
    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $sql = "SELECT * FROM itens WHERE id > :id";

    $id = 5;

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    print_r($data);
    echo "<br><br>";
    
    $itens = $stmt->fetchAll();

    print_r($itens);

?>