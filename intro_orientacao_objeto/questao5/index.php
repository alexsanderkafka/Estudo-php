<?php

    class Humano{
        public $perna = 2;
        public $olho = 2;
        public $colorHair = "Black";

        public function falar(){
            echo "Eu estou falando agora <br>";
        }
    }

    class Professor extends Humano{
        public $area = "Math";
        public $turmas = 90;
    }

    $professor = new Professor;
    echo $professor->perna . "<br>";
    echo $professor->olho . "<br>";
    echo $professor->colorHair . "<br>";
    echo $professor->area . "<br>";
    echo $professor->turmas . "<br>";

    echo $professor->falar();
?>