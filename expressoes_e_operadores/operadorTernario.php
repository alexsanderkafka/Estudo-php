<?php

    //Usado para coisas básicas    
    echo 20 > 10 ? "Deu true <br>" : "Deu false<br>";
    echo 20 > 50 ? "Deu true <br>" : "Deu false <br>";
    
    $a = 10;
    $b = 5;
    echo $a >= $b ? "Deu true <br>" : "Deu false <br>";
    echo $a === $b ? "Deu true <br>" : "Deu false <br>";
    echo $a === $b  || $a >= $b ? "Deu true <br>" : "Deu false <br>";
    echo $a === $b  || $a <= $b ? "Deu true <br>" : "Deu false <br>";

    $num = 2;
    $num2 = 10;
    echo $num >= $num2 ? "É TRUE <BR>" : "É FALSE <BR>";
    echo $num2 >= $num ? "É TRUE <BR>" : "É FALSE <BR>";
    echo $num >= $num2 || $num2 >= $num? "É TRUE <BR>" : "É FALSE <BR>";
    echo $num >= $num2 && $num2 >= $num? "É TRUE <BR>" : "É FALSE <BR>";
?> 