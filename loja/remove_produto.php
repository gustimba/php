<?php require_once("cabecalho.php");
      require_once("conecta.php");
      require_once("logica-usuario.php");
      

$produtodao = new ProdutoDao($conexao);
$id_produto = $_POST['id'];
$produtodao->removeProduto($id_produto);
$_SESSION["success"] = "Produto removido com sucesso.";
header("Location: produto-lista.php");
die();
?>