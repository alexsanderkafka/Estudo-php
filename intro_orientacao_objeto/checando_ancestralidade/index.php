<?php

    class Humano{

    }

    class Animal{

    }

    class Professor extends Humano{

    }

    $maria = new Humano;

    $turca = new Animal;

    if($maria instanceof Humano){
        echo "Maria é um Humano<br>";
    }
    else{
        echo "Maria não é Humano <br>";
    }

    if($turca instanceof Humano){
        echo "Turca é um Humano<br>";
    }
    else{
        echo "Turca não é Humano <br>";
    }

    $pedro = new Professor;

    if($pedro instanceof Professor){
        echo "Pedro é Professor<br>";
    }
    else{
        echo "Pedro não é Professor <br>";
    }

    if($pedro instanceof Humano){
        echo "Pedro é um Humano<br>";
    }
    else{
        echo "Pedro não é Humano <br>";
    }

    if($turca instanceof Professor){
        echo "Turca é um Professor<br>";
    }
    else{
        echo "Turca não é Professor <br>";
    }
    
?>