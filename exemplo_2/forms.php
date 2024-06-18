<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$username = $_POST["username"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];

$erro=0;
If (strlen($username)<5)
{ echo “O username deve possuir no mínimo 5 caracteres.”; $erro=1;}
<br>
If (strlen($senha)<5)
{ echo “A senha deve possuir no mínimo 5 caracteres.”; $erro=1;}
<br>
If(empty($cidade))
{ echo “Favor digitar sua cidade”; $erro=1;}
<br>
If(strlen($estado)!=2)
{ echo “Favor digitar seu estado corretamente”; $erro=1;}
<br>
//VERIFICA SE NÃO HOUVE ERRO
If($erro==0)
{ echo “Todos os dados foram digitados corretamente!”;}
?>
</body>
</html>