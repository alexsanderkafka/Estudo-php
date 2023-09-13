<?php

    class Car{
        public $rodas = 4;
        public $aro = 20;
        public $cor = "Vermelha";
        /*
        function __construct($rodas, $aro){
            $this->rodas = $rodas;
            $this->aro = $aro;
        }

        public function getRodas(){
            return $this->rodas;
        }

        public function getAro(){
            return $this->aro;
        }*/
    }

    /*
    $ferrari = new Car(4, 20);

    $rodas = $ferrari->getRodas();
    $aro = $ferrari->getAro();

    echo "$rodas <br> $aro <br>";*/

    $fiat = new Car;
    echo $fiat->rodas . "<br>";
    echo $fiat->aro . "<br>";

    $fiat->cor = "Azul";

    echo $fiat->cor . "<br>";
?>