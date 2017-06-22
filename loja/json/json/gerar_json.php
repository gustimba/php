<?php
// Informa o navegador que o conteúdo do arquivo é do tipo JSON
header('Content-Type: application/json');
 
// Se for usar esse código como exemplo,
// coloque ele num arquivo chamado gera-json.php
$lista = array(
    array('nome' => 'Eduardo Monteiro', 'idade' => 27),
    array('nome' => 'Suzana Medeiros', 'idade' => 20),
    array('nome' => 'Mônica de Sousa', 'idade' => 25),
);
 
// Imprime o array php em forma de JSON
print json_encode($lista);
?>