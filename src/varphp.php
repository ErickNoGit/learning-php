<?php
    $numero_inteiro = 1;
    $numero_float = 1.3456;
    $tipo_boleano_true = true;
    $tipo_boleano_false = false;
    $strings = "Hello World";
    $vazio = NULL;
    $array_antigo = array(1, 'pessoa', true, 1.4, NULL);
    $array_new = [$numero_float, [$tipo_boleano_false], $strings];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis do PHP</title>
</head>
<body>
    <h1>Lista de Variaveis</h1>
    <ul>
        <li>Numero Inteiro: <?php echo $numero_inteiro?></li>
        <li>Numero Float: <?php echo $numero_float?></li>
        <li>Tipo Boleano True: <?php var_dump($tipo_boleano_true)?></li>
        <li>Tipo Boleano False: <?php var_dump($tipo_boleano_false)?></li>
        <li>String no PHP: <?php echo $strings?></li>
        <li>Nulo: <?php var_dump($vazio)?></li>
        <li>Array antigo: <?php var_dump($array_antigo)?></li>
        <li>Array novo: <?php var_dump($array_new)?></li>
    </ul>
</body>
</html>
