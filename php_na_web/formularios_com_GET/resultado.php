<?php

    print_r($_GET);
    echo "<br>";
    
    if(isset($_GET['nome']) && isset($_GET['idade'])){
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
    }
    else{
        $nome = "Padrão";
        $idade = "Padrão";
    }
?>

<h1>O seu nome é <?=$nome?>, e você tem <?=$idade?> anos</h1>