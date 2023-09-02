<?php

    $textHtml = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

    echo $textHtml;

    $salvarTextoBanco = strip_tags($textHtml);
    echo "$salvarTextoBanco <br>";
?>