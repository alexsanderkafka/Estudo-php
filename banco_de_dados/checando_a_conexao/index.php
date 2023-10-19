<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $con = new mysqli($host, $user, $pass, $db);

    if($con->connect_errno){
        echo "Erro na conexão<br>";
        //echo "Error: " . mysqli_connect_error() . "<br>";
        echo "Error: " . $con->connect_error . "<br>";
    }
    else{
        echo "Conexão feita com seucesso<br>";
    }
?>