<?php
    $arr = [
        "Maria" => 200,
        "Matheus" => 400,
        "Alex" => 54,
        "Silva" => 249,
        "Joana" => 123,
        "Henrique" => 12
    ];

    echo "<pre>";
    print_r($arr);
    echo "</pre><br>";

    arsort($arr);
    echo "<pre>";
    print_r($arr);
    echo "</pre><br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ranking de potuação: </h1>
    <ol>
        <?php foreach($arr as $keys => $item): ?>
        <li><?=$keys . ":" . $item;?></li>
        <?php endforeach;?>
    </ol>
</body>
</html>