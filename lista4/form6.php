<?php
$nome = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$frequencia = $_POST['frequencia'];

$media = ($nota1 + $nota2) / 2;

echo "Aluno: $nome<br>";
echo "Nota 1: $nota1<br>";
echo "Nota 2: $nota2<br>";
echo "Frequência: $frequencia%<br>";
echo "Média: $media<br>";

if ($media < 5) {
    echo "<span style='color: red;'>Reprova por nota</span><br>";
} elseif ($frequencia < 75) {
    echo "<span style='color: red;'>Reprova por Frequência</span><br>";
} else {
    echo "Aprovado<br>";
}
?>