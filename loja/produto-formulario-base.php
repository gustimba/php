
<tr>
    <td>Nome</td>
    <td><input class="form-control" type="text" name="nome" value="<?=$produto->getnome()?>" /></td>
</tr>
<tr>
    <td>Preço</td>
    <td><input class="form-control" type="number" name="preco" value="<?=$produto->getpreco()?>" /></td>
</tr>
<tr>
    <td>Descrição</td>
    <td><textarea class="form-control" name="descricao"><?=$produto->getdescricao()?></textarea></td>
</tr>
<tr>
    <td></td>
    <td><input type="checkbox" name="usado" <?=$produto->isusado()?> value="true"> Usado</td>
</tr>
<tr>
    <td>Categoria</td>
    <td>
        <select class="form-control" name="categoria_id">
            <?php foreach($categorias as $categoria) :
                $essaEhACategoria = $produto->getcategoria()->getid_categoria() == $categoria->getid_categoria();
                $selecao = $essaEhACategoria ? "selected='selected'" : "";
            ?>
                <option value="<?=$categoria->getid_categoria()?>" <?=$selecao?>>
                    <?=$categoria->getnome()?>
                </option>
            <?php endforeach ?>
        </select>
    </td>
</tr>
