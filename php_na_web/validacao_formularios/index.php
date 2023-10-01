<?php
    $validacoes = [];

    if(count($_POST) > 0){

        if($_POST['nome'] === ""){
           $validacoes[] = "Por favor, preencha o nome do usuário";
        }

        if($_POST['email'] === ""){
            $validacoes[] = "Por favor, preencha o e-mail";
         }

        if($_POST['senha'] != $_POST['confirmacao']){
           $validacoes[] = "As senhas devem set iguais";
        }
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
    <?php if(count($validacoes)) : ?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
                <li><?= $validacao ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="index.php" method="POST">
        <input type="text" name="nome" placeholder="Digite o seu nome"><br><br>
        <input type="text" name="email" placeholder="Digite o seu email"><br><br>
        <input type="password" name="senha" placeholder="Digite sua senha"><br><br>
        <input type="password" name="confirmacao" placeholder="Confirme sua senha"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>