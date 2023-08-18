<?php

    function verificarCategoria(string $categoria){
        if($categoria === "eletrônicos"){
            echo "Essa categoria é de produtos eletrônicos";
        }
        else if($categoria === "vestuário"){
            echo "Essa categoria é de produtos de vestuário";
        }
        else if($categoria === "alimentos"){
            echo "Essa categoria é de produto alimentícios";
        }
        else{
            echo "Categoria desconhecida";
        }
    }

    verificarCategoria("eletrônicos");
    echo "<br><br>";
    verificarCategoria("vestuário");
    echo "<br><br>";
    verificarCategoria("alimentos");
    echo "<br><br>";
    verificarCategoria("eletrônico");
    echo "<br><br>";

?>