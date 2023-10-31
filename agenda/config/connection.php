<?php
    $host = "localhost";
    $db = "agenda";
    $user = "root";
    $pass = "";

    try{
        $conn = new PDO("mysql:host=$host;db=$db", $user, $pass);

        //Ativar o modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOExceptio $e){
        $error = $e->getMessage();
        echo "Erro: $error <br>";
    }
?>