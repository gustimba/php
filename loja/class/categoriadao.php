<?php
   
    class CategoriaDao{

    	private $conexao;

    	 function  __construct($conexao){
    	 	$this->conexao = $conexao;
    	 }

    	 function listaCategoria(){
			   	$categorias = array();
			   	$query = "Select * from categorias";
			   	$resultado = mysqli_query($this->conexao,$query);
			   	while ($categoria_array = mysqli_fetch_assoc($resultado)) {
			   		$categoria = new Categoria();
			   		$categoria->setid_categoria($categoria_array['id_categoria']);
			   		$categoria->setnome($categoria_array['nome']);
			   		
			   		  array_push($categorias, $categoria);
			   	}
			   	return $categorias;
			   }
			  
    }
?>