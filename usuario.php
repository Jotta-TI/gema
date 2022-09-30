<?php
function generatePassword($qtyCaraceters = 8){
  //Letras minúsculas embaralhadas
  $smallLetters = str_shuffle('abcdefghijklmnopqrstuvwxyz');
  
  //Letras maiúsculas embaralhadas
  $capitalLetters = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
  
  //Números aleatórios
  $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
  $numbers .= 1234567890;
  
  //Caracteres Especiais
  $specialCharacters = str_shuffle('!@#$%*-');
  
  //Junta tudo
  $characters = $capitalLetters.$smallLetters.$numbers.$specialCharacters;
  
  //Embaralha e pega apenas a quantidade de caracteres informada no parâmetro
  $password = substr(str_shuffle($characters), 0, $qtyCaraceters);
  
  //Retorna a senha
  return $password;
}

$cdg =  generatePassword();  
$senha             = (isset($_POST['password']) )?$_POST["password"]: null;
$nome             = (isset($_POST['firstname']) )?$_POST["firstname"]: null;
$last            = (isset($_POST['lastname']) )?$_POST["lastname"]: null;
$prontuario        = (isset($_POST['number']) )?$_POST["number"]: null;
$corpo_academico   = (isset($_POST ['corpo']) )?$_POST["corpo"]: null;

$emailp   = (isset($_POST ['email']) )?$_POST["email"]: null;

$nCompleto = $nome." ".$last;
$nome = $nCompleto;

require_once "/home/hostdeprojetos/public_html/gema/email/Email.class.php";
//include 'usuario.php';

use email\Email;

$email = new Email();
$email->setFrom("empresajotati@gmail.com", "Empresa Jota TI");
$email->addTo("$emailp", "$nome");
$email->setSubject("Confirmação da Cadastro");
$email->setMsgTxt("Seu código de confirmação é ".$cdg);

$email->send_gmail();
//$confirmar = "confim_cadastro.php";
//header("Location: $confirmar ");
//			die();


$_SESSION['nome'] = $nome;

$_SESSION['senha'] = $senha;

$_SESSION['email'] = $email;

$_SESSION['prontuario'] = $prontuario;

$_SESSION['corpo_academico'] = $corpo_academico;

$_SESSION['cdg'] = $cdg;
?>
      <!DOCTYPE html>
      <html lang="pt-br">
      
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Formulário</title>
      </head>
      
      <body>
        <div class="container">
          <div class="form-image">
            <img src="assets/img/If1-removebg-preview.png" alt="">
          </div>
        <div class="form">
          <form action="confim_cadastro.php" method="post">
          <div class="form-header">
            <div class="title">
              <h1>Confirmação de e-mail</h1>
            </div>
            
          </div>
      
          <div class="input-group">
            <div class="input-box">
              <label for="firstname"> Código de confirmação</label>
              <input id="firstname" type="text" name="cdg2" placeholder="Digite o código que recebeu do e-mail" required>
            </div>
      
            <div class="continue-button">
              <button><a href="index.php">Entrar</a></button>
            </div>
              
            <div class="continue-button">
              <button type="submit">Enviar Código</button>
            </div>
      
          </div>
      
          </div>
          </form>
        </div>
        </div>
      </body>
      
      </html>
 
