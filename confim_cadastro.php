<?php

require_once "/home/hostdeprojetos/public_html/testejotati/system/models/Usuarios.class.php";
session_start(); 
$id_tipo_usuario = 2;
$nome = $_SESSION['nome'];
$senha = $_SESSION['senha'];
$prontuario = $_SESSION['prontuario'];
$corpo_academico = $_SESSION['corpo_academico'];
$cdg = $_SESSION['cdg'];

//echo("Dados : ".$nome." ".$senha." ".$prontuario." ".$corpo_academico." ".$cdg);
$cdg2        = (isset($_POST['cdg2']) )?$_POST["cdg2"]: null;

require_once "system\models\Usuarios.class.php";

if($cdg == $cdg2){
$usuario = new Usuarios($id_tipo_usuario, $nome, $prontuario, $senha, $corpo_academico);
$usuario->insert();

//echo "<script>alert('Cadastro feito com sucesso!);</script>";
include_once "index.php";
}
else{
  echo "Código incorreto!";

}
?>
