
<?php
require_once("conecta.php");
    function buscaUsuario($conexao, $email, $senha){
    	//$senhaMd5 = md5($senha); isso é uma função da criptografia da senha
    	$email = mysqli_real_escape_string($conexao,$email);
    	$query= "select * from usuarios where email ='{$email}' and senha='{$senha}'";
    	$resultado = mysqli_query($conexao,$query);
    	$usuario = mysqli_fetch_assoc($resultado);
    	return $usuario;
    }