<?php
$senha             = (isset($_POST['senha']) )?$_POST["senha"]: null;
$usuario             = (isset($_POST['usuario']) )?$_POST["usuario"]: null;

$_SESSION["senha"] = $senha;
$_SESSION["usuario"] = $usuario;

require_once "/home/hostdeprojetos/public_html/gema/system/models/Select.class.php";

$usuario =  new Select($usuario,$senha);
$usuario->select();






?>
