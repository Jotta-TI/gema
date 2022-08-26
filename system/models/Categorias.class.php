<?php
	class Categorias {

		private $idCategoria;
		private $descricao;

		function __construct( $idCategoria, $descricao){
			 $this->setIdCategoria( $idCategoria );
			 $this->setDescricao( $descricao );
		}

		public function toArray(){
			 return array(
				 $this->getIdCategoria(),
				 $this->getDescricao()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setIdCategoria( $idCategoria ){
			 $this->idCategoria = $idCategoria;
		}

		public function getIdCategoria(){
			  return( $this->idCategoria );
		}

		public function setDescricao( $descricao ){
			 $this->descricao = $descricao;
		}

		public function getDescricao(){
			  return( $this->descricao );
		}

	}


?>