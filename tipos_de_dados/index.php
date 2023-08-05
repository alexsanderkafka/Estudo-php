<?php

    //Número inteios como toda linguagem
    $num = 5;
    echo $num, "<br>";
    $num = 54;
    echo $num, "<br>";
    $num = -3;
    echo $num, "<br><br>";

    echo 3, "<br>";
    echo 4, "<br>";
    echo 8, "<br>";

    if(is_int($num)){
        echo "<br>Esse número é inteiro <br>";
    }

    if(is_int("É?") != true){
        echo "<br>Esse número não é inteiro";
    }

    echo "<br><br>";

    //Número float
    $num = 3.43;
    echo $num, "<br>";
    echo 4.3453, "<br>";

    if(is_float($num)){
        echo "Esse número é float <br>";
    }

    if(is_float(-12) != true){
        echo "Não é float <br><br>";
    }

    $numFloat = 3.15;
    $numFloat2 = -5.15;
    $numFloat3 = 6.15;

    echo $numFloat, "<br>";
    echo $numFloat2, "<br>";
    echo $numFloat3, "<br>";

    if(is_float($numFloat2)){
        echo $numFloat2, " ---- é float <br><br>";
    }

    //String '' or "", aspas simples não reconhece a variavel
    echo "TESTANDO STRING DE ASPAS DUPLAS<br>";
    echo 'TESTANDO STRING DE ASPAS SIMPLES<br>';

    $nome = "Maria Silva";
    $nome2 = "João Silva";
    $nome3 = "José Maria";

    echo $nome, "<br>";
    echo $nome2, "<br>";
    echo $nome3, "<br>";

    if(is_string($nome)){
        echo "$nome ---- é String<br>";
    }

    if(is_string(23) != true){
        echo "Não é String <br><br>";
    }

    //Booleanos
    $verdade = true;
    $mentira = false;

    $num1 = 2;
    $num2 = 3;
    if($num2 > $num1){
        echo "$num2 é maior que $num1 <br>";
    }

    if(is_bool($verdade)){
        echo "É booleano <br>";
    }

    if(0 == false){
        echo "0 é false <br>";
    }

    if(1 == true){
        echo "1 é true <br>";
    }

    //Array
    $a = [0, 1, 2, 3, 4, 5];
    $b = ["Maria", "João", "Fausto"];
    $c = [2.4, 1.4, 5.3];
    $d = [false, true, false, true];

    print_r($a);
    echo "<br>";
    print_r($b);
    echo "<br>";
    print_r($c);
    echo "<br>";

    echo "$a[0] <br>";
    echo "$b[0] <br>";
    echo "$c[0] <br><br>";

    foreach($a as $i=> $element){
        echo "$element <br>";
    }
    echo "<br>";

    //Array Associativo
    $arr = ['nome' => 'Jõao', 'idade' => 40];

    print_r($arr);
    echo "<br>", $arr['nome'], "<br>";
    echo $arr['idade'], "<br>";

    $arr2 = ['marca' => 'VW', 'motor' => 'V12', 'portas' => '2'];
    print_r($arr2);
    echo "<br>";
    echo $arr2['marca'], "<br>";
    echo $arr2['motor'], "<br>";
    echo $arr2['portas'], "<br>";

    $arr3 = [
        'nome' => 'Maria Silva',
        'idade' => 19,
        'cpf' => '134.343.343-45',
        'emprego' => 'Não'
    ];

    print_r($arr3);
    echo "<br>";
    if($arr3['idade'] >= 18){
        echo "É maior de idade <br>";
    }
    else{
        echo "Não é maior de idade<br>";
    }

    //Objeto
    class Pessoa{

        public String $nome;
        public int $idade;
        public String $altura;

        public function __construct(string $nome, int $idade, string $altura){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->altura = $altura;
        }
        
        public function getNome(){
            return $this->nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function __toString(){
            return "$this->nome / $this->idade / $this->altura";
        }
        
    }

    $people = new Pessoa("Maria", 20, "1.90");
    echo $people->getNome();
    echo $people;
 
?>