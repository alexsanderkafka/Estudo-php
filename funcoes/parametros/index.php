<?php

    function velocidadeMax(int $vel){
        echo "O carro chega na velocidade máxima de $vel km/h <br>";
    }

    function descreverAnimal(string $nome, string $raca){
        echo "O $nome é da raça $raca <br>";
    }

    function nomeIdade(string $nome, int $idade){
        echo "Olá eu sou o $nome e tenho $idade anos<br>";
    }

    function  verificaNum(int $numero){
        if($numero % 2 == 0){
            echo "$numero é par<br>";
        }
        else{
            echo "$numero é ímpar<br>";
        }
    }

    velocidadeMax(500);
    velocidadeMax(200);
    velocidadeMax(400);
    //velocidadeMax() // ---- erro; fatal erro

    $velocidade = 1000;
    velocidadeMax($velocidade);
    velocidadeMax($velocidade, "teste"); //php não passa nenhum erro
    velocidadeMax(100);

    descreverAnimal("Bob", "vira lata");
    descreverAnimal("Shark", "Pastor Alemão");
    descreverAnimal("Poodle", "Tita");

    $fullName = "Maria Silva";
    $yearOld = 90;

    nomeIdade($fullName, $yearOld);
    $num = 10;
    $num2 = 3;
    verificaNum($num);
    verificaNum($num2);
    verificaNum(100);
    verificaNum(9);
?>