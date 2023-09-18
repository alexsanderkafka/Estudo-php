<?php
    class Humano{
        public $idade;
        public $nome;
        public $profissao;

        public function falar(){

        }

        public function andar(){
            
        }
    }

    if(class_exists("Humano")){
        echo "A class existe <br>";
    }
    else{
        echo "A class não existe <br>";
    }

    if(class_exists("Animal")){
        echo "A class existe <br>";
    }
    else{
        echo "A class não existe <br>";
    }

    print_r(get_class_vars("Humano"));

    echo "<br>";

    print_r(get_class_methods("Humano"));
?>