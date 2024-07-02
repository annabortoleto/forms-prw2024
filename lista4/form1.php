<?php
$operacao = $_POST["operacao"];
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
    
    switch ($operacao) {
        case "soma":
            $resultado = $numero1 + $numero2;
            echo "Resultado: " . $resultado;
            break;
        case "subtracao":
            $resultado = $numero1 - $numero2;
            echo "Resultado: " . $resultado;
            break;
        case "multiplicacao":
            $resultado = $numero1 * $numero2;
            echo "Resultado: " . $resultado;
            break;
        case "divisao":
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                echo "Resultado: " . $resultado;
            } else {
                echo "Impossível dividir por zero.";
            }
            break;
        default:
            echo "Operação inválida.";
    }
?>