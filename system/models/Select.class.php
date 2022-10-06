<?php
include_once '/home/hostdeprojetos/public_html/system/databases/DBConnection.class.php';


	class Select  {
		private $usuario;
		private $senha;
	 

		function __construct( $usuario, $senha){
			 $this->setUsuario( $usuario );
			 $this->setSenha( $senha );
		}
		public function select(){
		    $conn = new DBConnection();
			$SqlCommand = "select * from `hostdeprojetos_gema`.`usuario` where prontuario = '".$this->getUsuario()."' AND senha = '".$this->getSenha()."'";
		    
		 echo $SqlCommand;
		  $result = $conn->query($SqlCommand);
			echo $SqlCommand;
          
          if($result->num_rows > 0){
                header('Location: principal.php');
            }
            else{
                echo "<script>alert('Usuario e/ou Senha incorreto! Tente novamente.');location.href=\"index.php\";</script>";
               

            }
		  
		}
		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setUsuario( $usuario ){
			 $this->usuario = $usuario;
		}

		public function getUsuario(){
			  return( $this->usuario );
		}
        public function setSenha( $senha ){
            $this->senha = $senha;
       }

	   public function getSenha(){
			 return( $this->senha );
	   }
	}


?>
