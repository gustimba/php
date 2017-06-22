<?php
 require_once("logica-usuario.php");
 logout();
 $_SESSION["sucess"]= "Deslogado com sucesso";
 header("Location: index.php");
 die();
   ?>