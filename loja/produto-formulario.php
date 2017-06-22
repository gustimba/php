
<?php require_once("cabecalho.php");
      require_once("banco-usuario.php");
      require_once("logica-usuario.php"); 
      require_once("class/Produto.php");
      require_once("class/Categoria.php");
?>
 <?php  verificaUsuario(); 
   ?>
           

<?php
  
  $produtodao = new  ProdutoDao($conexao);
  $categoria = new Categoria();
  $categoria->setid_categoria(1);

  $produto = new Produto("","","",$categoria,"");
  
 $categoriadao = new categoriaDao($conexao);
 $categorias = $categoriadao->listaCategoria();
 ?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php" method="POST">
    <table class="table">
           
                <?php  require_once("produto-formulario-base.php");?>
         <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>

    </table>
</form>


<?php include("rodape.php"); ?>
