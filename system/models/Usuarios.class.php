<?php
include_once '/home/hostdeprojetos/public_html/testejotati/system/databases/DBConnection.class.php';


	class Usuarios  {
		private $id_tipo_usuario;
		private $nome;
		private $prontuario;
		private $senha;
	    private $corpo_academico;

		function __construct( $id_tipo_usuario, $nome, $prontuario,$senha, $corpo_academico){
			 $this->setId_Tipo_Usuario( $id_tipo_usuario );
			 $this->setNome( $nome );
			 $this->setProntuario( $prontuario );
			 $this->setSenha( $senha );
			 $this->setCorpo_Academico( $corpo_academico);
		}

		public function toArray(){
			 return array(
				 $this->getId_Tipo_Usuario(),
				 $this->getNome(),
				 $this->getProntuario(),
				 $this->getSenha(),
				 $this->getCorpo_Academico()
			);
		}
		public function insert(){
		    $conn = new DBConnection();
		    $SqlCommand = "insert into `hostdeprojetos_gema`.`usuario` (id_tipo_usuario,nome,prontuario, senha,corpo_academico) values ('".
		  		   $this->getId_Tipo_Usuario()."','".
		  		    $this->getNome()."','".
		  		    $this->getProntuario()."','".
					  $this->getSenha()."','".
		  		    $this->getCorpo_Academico()."')";
		    
		  //echo $SqlCommand;
		  $conn->query($SqlCommand);
		}
		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setId_Tipo_Usuario( $id_tipo_usuario ){
			 $this->id_tipo_usuario = $id_tipo_usuario;
		}

		public function getId_Tipo_Usuario(){
			  return( $this->id_tipo_usuario );
		}

		public function setNome( $nome ){
			 $this->nome = $nome;
		}

		public function getNome(){
			  return( $this->nome );
		}

		public function setProntuario( $prontuario ){
			 $this->prontuario = $prontuario;
		}

		public function getProntuario(){
			  return( $this->prontuario );
		}

		public function setSenha( $senha ){
			$this->senha = $senha;
	   }

	   public function getSenha(){
			 return( $this->senha );
	   }

	   

		public function setCorpo_Academico( $corpo_academico ){
			 $this->corpo_academico = $corpo_academico;
		}

		public function getCorpo_Academico(){
			  return( $this->corpo_academico );
		}

	}


?>
