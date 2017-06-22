<?php require_once("conecta.php");
 require_once("banco-usuario.php");
 require_once("logica-usuario.php");

  $usuario = buscaUsuario($conexao,$_POST["email"],$_POST["senha"]);

  if ($usuario == null){
  	$_SESSION["danger"] = "usuario ou senha incorreta.";
  	header("Location: index.php");
  }else{
  	$_SESSION["success"] = "usuario logado.";
  	 logaUsuario($usuario["email"]);
     header("Location: index.php");
    }  
die();
