<?php
$senha             = (isset($_POST['senha']) )?$_POST["senha"]: null;
$usuario             = (isset($_POST['usuario']) )?$_POST["usuario"]: null;


require_once "/home/hostdeprojetos/public_html/system/models/Select.class.php";

$usuario =  new Select($usuario,$senha);
$usuario->select();



?>
