<?php

    interface Caracteristicas{
        const NOME = "Maria";

        public function falar();
    }

    class Humano implements Caracteristicas{
        public $idade = 29;

        public function falar(){
            echo "Olá mundo <br>";
        }

        public function dizerNome(){
            echo "Meu nome é " . self::NOME . "<br>";
        }
    }

    $maria = new Humano;
    $maria->falar();
    
    $maria->dizerNome();
?>