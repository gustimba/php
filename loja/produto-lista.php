<?php require_once("cabecalho.php"); 
      require_once("logica-usuario.php");
      require_once("class/produto.php");
      require_once("class/categoria.php");

       
      
       $categoria = new  categoria();
    ?>

    
<table class="table table-striped table-bordered">

    <?php 
        $produtodao = new ProdutoDao($conexao);
        $produtos = $produtodao->listaprodutos();
        foreach($produtos as $produto) :
    ?>
    <tr> 
        
        <td><?= $produto->getnome() ?></td>
        <td>R$ <?= $produto->getpreco() ?></td>
        <td>R$ <?=$produto->PrecoDesconto(0.2)?></td>
        <td><?= substr($produto->getdescricao() , 0, 40)?></td> 
        <td> <?=$produto->getcategoria()->getnome() ?></td>
        <td align="center">
        <form action="produto-alterar-formulario.php" method="POST">
            <input type="hidden" name="id" value="<?=$produto->getid_produto()?>">
            <button class="btn btn-primary">Alterar</button>
        </form>
     
        <td align="center">
            <form action="remove_produto.php" method="POST">

            <input  type="hidden" name="id" value="<?=$produto->getid_produto()?>">
                <button class="btn btn-danger">Remover</button>
            </form>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>



<?php include("rodape.php"); ?>
