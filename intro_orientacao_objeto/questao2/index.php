<?php

    class Cachorro{
        public function latir(){
            echo "Eu vou latir <br>";
        }

        public function andar(){
            echo "Eu andei<br>";
        }
    }

    $dog1 = new Cachorro;
    $dog2 = new Cachorro;
    
    $dog1->latir();
    $dog1->andar();

    $dog2->latir();
    $dog2->andar();
?>