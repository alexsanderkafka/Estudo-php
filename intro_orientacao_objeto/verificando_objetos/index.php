<?php
    class Humano{
        public function falar(){
            echo "Olá";
        }
    }

    $alex = new Humano;

    $teste = 10;
    if(is_object($alex)){
        echo "É um objeto <br>";
    }
    else{
        echo "Não é um objeto <br>";
    }

    if(is_object($teste)){
        echo "É um objeto <br>";
    }
    else{
        echo "Não é um objeto <br>";
    }

    echo get_class($alex) . "<br>";

    if(method_exists($alex, "falar")){
        echo "Método existe <br>";
    }
    else{
        echo "Método não existe <br>";
    }

    if(method_exists($alex, "andar")){
        echo "Método existe <br>";
    }
    else{
        echo "Método não existe <br>";
    }
?>