<?php
$velocidade = $_POST['velocidade'];
$distancia = $_POST['distancia'];
$consumo = $_POST['consumo'];

$tempo = $distancia / $velocidade;
$combustivel = $distancia / $consumo;

echo "Total horas: " . number_format($tempo, 2, '.', '') . "<br>";
echo "Total combustível: " . number_format($combustivel, 2, '.', '') . "<br>";
?>