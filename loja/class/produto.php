<?php 
 class Produto 
 {
 	private $id_produto;
 	private $nome;
 	private $preco;
 	private $descricao;
    private $categoria;
    private $usado; 

    function __construct($nome ,$preco, $descricao, Categoria $categoria, $usado){
            $this->nome = $nome;
            $this->preco = $preco;
            $this->descricao = $descricao;
            $this->categoria = $categoria;
            $this->usado = $usado;
     }
  
    public function getid_produto(){
    	 return $this->id_produto;
    }
    public function setid_produto($id_produto){
           $this->id_produto = $id_produto;
    }

     public function getnome(){
    	 return $this->nome;
    }
  

     public function getpreco(){
    	 return $this->preco;
    }
   

     public function getdescricao(){
    	 return $this->descricao;
    }
    
     public function getcategoria(){
    	 return $this->categoria;
    }
    

     public function isusado(){
    	 return $this->usado;
    }
    public function setusado($usado){
           $this->usado= $usado;
    }

   public  function PrecoDesconto($valor){
   	  if($valor > 0 && $valor <= 0.5){
        $this->preco -= $this->preco * $valor;
    }
        return $this->preco;
    
    }
}
?>