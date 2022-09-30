<?php

use email\Email;

require __DIR__.'/Email.class.php';

$email = new Email();
$email->setFrom("empresajotati@gmail.com", "Empresa Jota TI");
$email->addTo("$emailp", "$nome");
$email->setSubject("Confirmação da Cadastro");
$email->setMsgTxt("Seu código de confirmação é ".$cdg);

  
/*
$email = new Email();
$email->setFrom("empresajotati@gmail.com", "Empresa Jota TI");
$email->addTo("jennylima.soledade@gmail.com", "Jenny Lima (Pessoal)");
$email->setSubject("Teste de Email 2");
$email->setMsgTxt("Teste de email pelo PHP 2");
$email->send_gmail();
*/
?>