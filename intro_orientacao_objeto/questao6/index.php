<?php
    class Cachorro{
        public $nome;
        public $raca;

        function __construct($nome, $raca){
            $this->nome = $nome;
            $this->raca = $raca;
        }

        function getNome(){
            return $this->nome;
        }  

        function getRaca(){
            return $this->raca;
        }  
    }

    $turca = new Cachorro("Turca", "Pastor Alemão");
    echo "Nome do cachorro: " . $turca->getNome() . "<br>";
    echo "Raça do cachorro: " . $turca->getRaca() . "<br>";
?>