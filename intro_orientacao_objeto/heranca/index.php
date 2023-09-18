<?php

    class Humano{
        public $idade = 29;
        
        public function falar(){
            echo "Hello world! <br>";
        }

        private function gritar(){
            echo "PHP É FERA <br>";
        }

        public function accessarGritar(){
            $this->gritar();
        }

        protected function falarBaixo(){
            echo "lalala <br>";
        }

        public function accessarFalarBaixo(){
            $this->falarBaixo();
        }

    }

    class Programador extends Humano{
        public function falarBaixoProgramador(){
            $this->falarBaixo();
        }
    }

    $pessoa = new Humano;
    $pessoa->falar();
    $pessoa->accessarGritar();
    $pessoa->accessarFalarBaixo();


    $maria = new Programador;
    echo $maria->idade . "<br>";

    $maria->falar();
    $maria->accessarGritar();
    $maria->falarBaixoProgramador();

?>