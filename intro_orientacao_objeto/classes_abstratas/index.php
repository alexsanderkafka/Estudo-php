<?php

    abstract class Teste{
        public static function testandoClasse(){
            echo "Este método é de uma class abstrata <br>";
        }

        abstract public function testeAbs();
    }

    //$x = new Teste

    Teste::testandoClasse();

    class Nova extends Teste{
        public function testeAbs(){
            echo "Teste método abstrato <br>";
        }
    }

    $n = new Nova;
    $n->testeAbs();
?>