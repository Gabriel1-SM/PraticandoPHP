<?php
$ling = [
    ["Criador" => "Gabriel", "linguagem" => ".php"],
    ["Criador" => "Gean", "linguagem" => ".py"],
    ["Criador" => "Garcia", "linguagem" => ".js"]
];
?>

<table>
    <thead>
        <tr>
            <th>Criador</th>
            <th>Linguagem</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ling as $item): ?>
        <tr>
            <td><?= $item['Criador'] ?></td>
            <td><?= $item['linguagem'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>