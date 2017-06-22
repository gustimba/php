<?php 
		  require_once("cabecalho.php");
	     
     	?>


<?php    
         $produtodao = new ProdutoDao($conexao);
         $categoriadao = new CategoriaDao($conexao);
		 $id = $_POST['id'];
		 $produto = $produtodao->buscaProduto($id);
		 $categorias = $categoriadao->listaCategoria();
		 $selecao_usado = $produto->isusado() ? "checked='checked'" : "";
         $produto->setusado($selecao_usado);
?>
 

<h1>alterar produto</h1>
<form action="alterar-produto.php" method="POST">
<input type="hidden" name="id" value="<?=$id?>">
    <table class="table">
     
      <?php include("produto-formulario-base.php");?>
        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
        </tr>

    </table>
</form>

<?php include("rodape.php"); ?>