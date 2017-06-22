<?php require_once("cabecalho.php");
       require_once("conecta.php");
       
      
  
   $categoria =  new Categoria(); 
   
   $categoria->setid_categoria($_POST['categoria_id']);
 
 
 $nome = $_POST['nome'];
 $preco = $_POST['preco'];
 $descricao = $_POST['descricao'];

 $categoria = $categoria;
?>
<?php
 if (array_key_exists('usado', $_POST)){
 	$usado = "1";
 }else{
 	$usado = "0";
 }
 $produto = new Produto($nome,$preco,$descricao,$categoria,$usado);
 $produtodao = new ProdutoDao($conexao);
 if($produtodao->alteraproduto($produto)) { ?>
    <p class="text-success">O produto <?= $produto->getnome(); ?>, <?= $produto->getpreco(); ?> foi alterado  com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);

?>
    <p class="text-danger">O produto <?= $produto->getnome(); ?> não foi alterado: <?= $msg ?></p>
<?php
}
?>