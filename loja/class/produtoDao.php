<?php


   class ProdutoDao{

          private  $conexao; 

          function __construct($conexao){
               $this->conexao = $conexao;
          }
                function listaProdutos() {
                    $produtos = array();
                    
                    $resultado = mysqli_query($this->conexao, "select p.* ,c.nome as categoria_nome from produtos as p join categorias as c on p.id_categoria = c.id_categoria");

                    while($produto_array = mysqli_fetch_assoc($resultado)) {
                        
                        $categoria = new Categoria();
                        $categoria->setnome($produto_array['categoria_nome']);

                       
                        $nome = $produto_array['nome'];
                        $preco = $produto_array['preco'];
                        $descricao = $produto_array['descricao']; 
                        $usado = $produto_array['usados'];
                     
                     $produto = new Produto($nome, $preco, $descricao, $categoria, $usado);

                     $produto->setid_produto($produto_array['id_produto']);

                       array_push($produtos, $produto);
                    
                }
                    return $produtos;
                }

                function insereProduto( Produto $produto) {
                    $query = "insert into produtos (nome, preco,descricao, id_categoria,usados) values ('{$produto->getnome()}', {$produto->getpreco()}, '{$produto->getdescricao()}', {$produto->getcategoria()->getid_categoria()},{$produto->isusado()})";
                    return mysqli_query($this->conexao, $query);
                }

                function removeproduto( $id){
                	$query = "delete from produtos where id_produto = {$id};";
                	return mysqli_query($this->conexao,$query);
                }	

                function buscaProduto( $id){
                    $query= "select * from produtos where id_produto = '$id';";
                    $resultado = mysqli_query($this->conexao,$query);
                    $produto_buscado = mysqli_fetch_assoc($resultado);

                    $categoria = new Categoria();
                    $categoria->setid_categoria($produto_buscado['id_categoria']);

                    $nome = $produto_buscado['nome'];
                    $preco = $produto_buscado['preco'];
                    $descricao = $produto_buscado['descricao'];
                    $categoria = $categoria;
                    $usado = $produto_buscado['usados'];
                    
                    $produto = new Produto($nome,$preco,$descricao,$categoria,$usado);
                    $produto->setid_produto($produto_buscado['id_produto']);
                    return $produto;
                }
                    
                    function alteraproduto( Produto $produto){
                    $query ="update produtos set nome = '{$produto->getnome()}',
                     preco = {$produto->getpreco()}, descricao = '{$produto->getdescricao()}',
                     id_categoria = {$produto->getcategoria()->getid_categoria()}, usados = {$produto->isusado()}
                      where id_produto = '{$produto->getid_produto()}'";

                    return mysqli_query($this->conexao,$query);
                }
}
?>