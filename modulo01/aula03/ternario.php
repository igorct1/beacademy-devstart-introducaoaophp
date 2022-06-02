<?php

$idade = 27;
$nome = "Igor";
$cidade =  "São Paulo";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Cidade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nome; ?></td>
                <td><?php echo $idade; ?></td>
                <td><?php echo $cidade; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>