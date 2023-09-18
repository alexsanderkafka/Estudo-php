<?php
    
    class Humano{
        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        public function mostrarConstante(){
            echo self::BRACOS . "<br>";
        }
    }

    $pessoa = new Humano;
    echo $pessoa::OLHOS . "<br>";

    $pessoa->mostrarConstante();
?>