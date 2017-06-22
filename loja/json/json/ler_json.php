<?php
// Primeiro lemos o conteúdo da página gera_json.php
$json = file_get_contents('gerar_json.php');
 
// Depois convertemos o JSON para um array em PHP
// O segundo parâmetro com valor true, informa que
// o retorno de json_decode deve ser um array associativo.
$lista = json_decode($json, true);
 
// Veja como fica o resultado
var_dump($lista);
 
// Manipulando o resultado como PHP.
foreach($lista as $objeto) {
    print "Nome: {$objeto['nome']} - Idade: {$objeto['idade']}";
}
?>