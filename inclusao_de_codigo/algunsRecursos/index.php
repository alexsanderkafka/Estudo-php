<?php
    //include_once e require_once
    //Funcionam da mesma maneira que require e include porém
    //impedem que o mesmo seja adicionado mais de uma vez

    //include_once "teste2.php";
    include_once "teste.php";
    include_once "teste.php"; // com o include fazia duas vezes

    require_once "teste.php";
    require_once "teste2.php";
    require_once "teste2.php";
?>
<h1>TESTANDO CÓDIGO</h1>