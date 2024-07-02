<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado:</title>
</head>
<body>
    <?php
    $ano = $_POST['ano'];

    if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
        echo "$ano é um ano bissexto.";
    } else {
        echo "$ano não é um ano bissexto.";
    }
    ?>
</body>
</html>
