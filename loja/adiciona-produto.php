<?php require_once("cabecalho.php");// usamos o require_once para incluirmos so uma vez.
      require_once("conecta.php");
      
      require_once("logica-usuario.php");
      require_once("class/produto.php");
      require_once("class/categoria.php");       
verificaUsuario();
?>
<?php
 
 $categoria = new Categoria();
 
  $categoria->setid_categoria($_POST["categoria_id"]);

$nome= $_POST["nome"];
$preco= $_POST["preco"];
$descricao= $_POST["descricao"];
$categoria = $categoria;
//$nome = mysqli_real_escape_string($conexao,$nome);
 if (array_key_exists('usado', $_POST)){
 	$usado = "true";
 }else{
 	$usado = "false";
 }

 $produto = new Produto($nome,$preco,$descricao,$categoria,$usado);

  $produtodao = new ProdutoDao($conexao);
if($produtodao->insereProduto($produto)) { ?>
    <p class="text-success">O produto <?= $produto->getnome() ?>, <?= $produto->getpreco() ?> adicionado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
?>
    <p class="text-danger">O produto <?= $produto->getnome() ?> não foi adicionado: <?= $msg ?></p>
<?php
}
?>

<?php include("rodape.php"); ?>
