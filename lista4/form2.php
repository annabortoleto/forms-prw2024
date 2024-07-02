<?php
$texto = $_POST['texto'];
$texto_rolagem = $_POST['texto_rolagem'];
$caixa = isset($_POST['caixa']) ? 'Selecionado' : 'Não selecionado';
$botao = $_POST['botao'];
$select = $_POST['select'];

echo "Dados enviados:<br>";
echo "Caixa de Texto de uma Linha: $texto<br>";
echo "Caixa de Texto de Rolagem: $texto_rolagem<br>";
echo "Caixa de Seleção: $caixa<br>";
echo "Botão de Opção selecionado: $botao<br>";
echo "Opção do Menu Suspenso selecionada: $select<br>";
?>
