<?php
    $pessoas = [
        "Maria" => 29,
        "Joao" => 34,
        "Pedro" => 19,
        "Silva" => 55
    ];
?>
<table border="4">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $key => $value): ?>
        <tr>
            <td><?=$key ?></td>
            <td><?=$value ?></td>
        </tr>
    <?php endforeach;?>
</table>