<?php
    //Encontra a primeira ocorrência
    echo "<h1>Encontra a primeira ocorrência</h1>";
    $string = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

    $teste = strpos($string, "strpos");
    echo "$teste <br>";

    $teste2 = strpos($string, "java");
    echo "$teste2 <br>";

    if($teste2 === false){
        echo "Palavra não encotrada <br>";
    }

    $palavra = "com";
    $teste3 = strpos($string, $palavra);
    echo "$teste3 <br>";

    $palavra2 = "o";
    $teste4 = strpos($string, $palavra2);
    echo "$teste4 <br>";

    //Encontra a última ocorrência
    echo "<br><h1>Encontra a última ocorrência</h1>";
    $string = "Testando encontrado palavra teste, em uma string que tem teste";
    $palavra = strrpos($string, "teste");
    echo "$palavra <br>";

    if(strrpos($string, "java") === false){
        echo "A palavra java não foi encontrada<br>";
    }

    $p = substr($string, strpos($string, "teste"), 5);
    echo "$p <br>";
?>