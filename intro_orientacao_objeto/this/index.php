<?php

    class Animal{
        public $nome;

        public function escolherNome($nome){
            $this->nome = $nome;
        }

        public function latir(){
            return "Au au <br>";
        }

        public function latirForte(){
            return strtoupper($this->latir());
        }
    }

    $frida = new Animal;

    $frida->escolherNome("Frida");

    echo "O nome do animal é " . $frida->nome . "<br>";

    echo $frida->latir();

    echo $frida->latirForte();
?>