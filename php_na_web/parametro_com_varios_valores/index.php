<?php

    if(isset($_POST['ingredientes'])){
        $ingredientes = $_POST['ingredientes'];
        print_r($ingredientes);
        echo "<br>";
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
    <form action="index.php" method="POST">
        <input type="checkbox" name="ingredientes[]" value="Tomate">Tomate<br>
        <input type="checkbox" name="ingredientes[]" value="Abóbora">Abóbora<br>
        <input type="checkbox" name="ingredientes[]" value="Feijão">Feijão<br>
        <input type="checkbox" name="ingredientes[]" value="Alface">Alface<br>
        <input type="checkbox" name="ingredientes[]" value="Cebola">Cebola<br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>