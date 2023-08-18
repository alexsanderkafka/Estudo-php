<?php
function calculaDesconto($valorProduto, $categoria){
        if($categoria === "eletrônicos"){
            $calc = $valorProduto - $valorProduto * 0.10;
            return $calc;
        }
        else if($categoria === "vestuário"){
            $calc = $valorProduto - $valorProduto * 0.20;
            return $calc;
        }
        else if($categoria === "alimentos"){
            $calc = $valorProduto - $valorProduto * 0.05;
            return $calc;
        }
        else{
            return $valorProduto;
        }
    }
    
    
    echo calculaDesconto(200.00, "eletrônicos");
    echo "<br><br>";
    echo calculaDesconto(200.00, "vestuário");
    echo "<br><br>";
    echo calculaDesconto(200.00, "alimentos");
    echo "<br><br>";
    echo calculaDesconto(200.00, "tools");
    echo "<br><br>";
    
?>