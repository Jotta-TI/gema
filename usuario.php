<?php
 
    
$senha             = (isset($_POST['password']) )?$_POST["password"]: null;
$nome             = (isset($_POST['firstname']) )?$_POST["firstname"]: null;
$last            = " ".(isset($_POST['lastname']) )?$_POST["lastname"]: null;
$prontuario        = (isset($_POST['number']) )?$_POST["number"]: null;
$corpo_academico   = (isset($_POST ['corpo']) )?$_POST["corpo"]: null;
$id_tipo_usuario   = 2;


   
  
  require_once "/home/hostdeprojetos/public_html/testejotati/system/models/Usuarios.class.php";
    
    $usuario = new Usuarios($id_tipo_usuario, $nome, $prontuario, $senha, $corpo_academico);
    
    $usuario->insert();
 
   echo ("Inserção feita com sucesso");
 
?>
