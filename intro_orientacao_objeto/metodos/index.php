<?php

    class Pessoa{
        function falar(){
            echo "Olá, eu sou um obejto<br>";
        }

        function somar($x, $y){
            echo $x + $y . "<br>";
        }
    }

    $maria = new Pessoa;
    $maria->falar();
    $maria->falar();

    $joao = new Pessoa;
    $joao->falar();

    $maria->somar(2, 2);
    $joao->somar(10, 5);
?>