<?php

    class Calculadora{

        public function somar($a, $b){
            return $a + $b;
        }

        public function subtrair($a, $b){
            return $b - $a;
        }

        public function multiplicar($a, $b){
            return $a * $b;
        }

        public function dividir($a, $b){
            if($b === 0){
                return "Não foi possível realizar a divisão!";
            }
            else{
                return $a / $b;
            }
        }
    }

    $calc = new Calculadora;

    echo $calc->somar(2, 2) . "<br>";
    echo $calc->subtrair(-1, 10) . "<br>";
    echo $calc->multiplicar(100, 2) . "<br>";
    echo $calc->dividir(10, 5) . "<br>";
    echo $calc->dividir(100, 0) . "<br>";
?>