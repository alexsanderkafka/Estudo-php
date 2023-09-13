<?php

    class Pessoa{
        public $nome;
        public $idade;

        public function andar(){
            echo $this->nome . " está andando";
        }

        public function imprimir(){
            echo $this->nome . "<br>" . $this->idade . "<br>";
        }
    }

    $maria = new Pessoa;
    $maria->nome = "Maria";
    $maria->idade = 73;

    $maria->imprimir();

    $maria->andar();
?>