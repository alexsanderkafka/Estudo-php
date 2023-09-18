<?php
    
    class Car{
        public $rodas = 4;
        private $vidro = "Sem película";
        protected $portas = 4;

        public function peliculaDeFabrica($pelicula){
            $this->vidro = $pelicula;
        }

        public function getVidro(){
            return $this->vidro;
        }

        public function getPortas(){
            return $this->portas;
        }
    }

    class Mecanico{
        public function alterarRodas($carro){
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula){
            $carro->vidro = $pelicula;
        }
    }

    $carro = new Car;
    echo $carro->rodas . "<br>";

    $maria = new Mecanico;
    $maria->alterarRodas($carro);

    echo $carro->rodas . "<br>";

    /*Não pode alterar pq é privado
    $maria->colocarPelicula($carro, "G20");
    */

    $carro->peliculaDeFabrica("G20");
    echo $carro->getVidro() . "<br>";

    //echo $carro->portas;
    echo $carro->getPortas() . "<br>";
?>