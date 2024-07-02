<?php

$capitais = array(
    "Acre" => "Rio Branco",
    "Alagoas" => "Maceió",
    "Mato Grosso" => "Cuiabá",
    "Tocantins" => "Palmas",
    "Rio de Janeiro" => "Rio de Janeiro",
    "Espirito Santo" => "Vitória",
    "Bahia" => "Salvador",
    "Paraná" => "Curitiba",
    "Sao Paulo" => "São Paulo",
    "Ceara" => "Fortaleza",
    "Paraiba" => "João Pessoa",
    "Maranhao" => "São Luis",
    "Pernambuco" => "Recife",
    "Piaui" => "Teresina",
    "Rio Grande do Norte" => "Natal",
    "Goias" => "Goiânia",
    "Mato Grosso do Sul" => "Campo Grande",
    "Minas Gerais" => "Belo Horizonte",
    "Para" => "Belém",
    "Rio Grande do Sul" => "Porto Alegre",
    "Rondônia" => "Porto Velho",
    "Distrito Federal" => "Brasília",
    "Roraima" => "Boa Vista",
    "Sergipe" => "Aracaju",
    "Santa Catarina" => "Florianópolis",
    "Amazonas" => "Manaus",
    "Amapá" => "Macapá",

);


if(isset($_POST['estado'])) {
    $estado = $_POST['estado'];
    
    if(array_key_exists($estado, $capitais)) {
        $capital = $capitais[$estado];
        echo "A capital de $estado é $capital.";
    } else {
        echo "Estado não encontrado na base de dados.";
    }
}
?>
