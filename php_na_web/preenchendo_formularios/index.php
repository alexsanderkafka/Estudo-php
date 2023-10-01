<?php
    $usuario = [
        'nome' => "Alex",
        'idade'=> 29,
        'profissao' => 'Programador'
    ];

    if($usuario){
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao =  $usuario['profissao'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="nome" placeholder="Digite seu nome" value="<?= $nome ?>"><br>
        <input type="text" name="idade" placeholder="Digite sua idade" value="<?= $idade ?>"><br>
        <input type="text" name="profissao" placeholder="Digite sua profissão" value="<?= $profissao ?>"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>