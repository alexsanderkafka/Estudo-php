<?php
    /*
    SERVER_SOFTWARE -> identificação do servidor
    SERVER_NAME -> Hostname, DNS ou IP do servidor
    SERVER_PROTOCOL -> Protocolo do servidor
    SERVER_PORT -> Porta do servidor
    QUERY_STRING -> Argumentos após o ? na URL
    */

    print_r($_SERVER);
    echo "<br><br><br>";

    print_r($_SERVER['SERVER_SOFTWARE']);
    echo "<br>";
    print_r($_SERVER['SERVER_NAME']);
    echo "<br>";
    print_r($_SERVER['SERVER_PROTOCOL']);
    echo "<br>";
    print_r($_SERVER['SERVER_PORT']);
    echo "<br>";
    print_r($_SERVER['QUERY_STRING']);
?>