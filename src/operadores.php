<?php
    // essa operacao deve dar false
    $tipo = '12' >= 15 ? true: false;

    $tipo1 = '12' === 15 ? true: false;

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis do PHP</title>
</head>
<body>
    <h1>Operadores</h1>
    <ul>
        <li>Operacao deve dar error: <?php var_dump($tipo) ?></li>
        <li>Operacao deve dar error: <?php var_dump($tipo1) ?></li>
    </ul>
</body>
</html>
