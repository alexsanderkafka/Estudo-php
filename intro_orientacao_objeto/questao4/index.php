<?php
    class Car {
        public $nome;
        public $marca;
        public $velocidadeMax;

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setMarca($marca){
            $this->marca = $marca;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function setVelocidadeMax($velocidadeMax){
            $this->velocidadeMax = $velocidadeMax;
        }

        public function getVelocidadeMax(){
            return $this->velocidadeMax;
        }
    }

    $carro = new Car;
    $carro->setNome("Fusca");
    $carro->setMarca("Vw");
    $carro->setVelocidadeMax(400);

    echo "Nome: " . $carro->getNome() . "<br>";
    echo "Marca: " . $carro->getMarca() . "<br>";
    echo "Velocidade Max: " . $carro->getVelocidadeMax() . " km/h <br>";
?>