<?php 
  
   class Categoria {

   	  private $id_categoria;
   	  private $nome;
   
    public function getid_categoria(){
    	 return $this->id_categoria;
    }
    public function setid_categoria($id_categoria){
           $this->id_categoria = $id_categoria;
    }
    
    public function getnome(){
    	 return $this->nome;
    }
    public function setnome($nome){
           $this->nome = $nome;
    }

 }
?>