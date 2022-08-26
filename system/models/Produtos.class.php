<?php
	class Produtos {

		private $idProduto;
		private $fabricante;
		private $nome;
		private $marca;
		private $modelo;
		private $idCategoria;
		private $descricao;
		private $unidadeMedida;
		private $largura;
		private $altura;
		private $profundidade;
		private $peso;
		private $cor;

		function __construct( $idProduto, $fabricante, $nome, $marca, $modelo, $idCategoria, $descricao, $unidadeMedida, $largura, $altura, $profundidade, $peso, $cor){
			 $this->setIdProduto( $idProduto );
			 $this->setFabricante( $fabricante );
			 $this->setNome( $nome );
			 $this->setMarca( $marca );
			 $this->setModelo( $modelo );
			 $this->setIdCategoria( $idCategoria );
			 $this->setDescricao( $descricao );
			 $this->setUnidadeMedida( $unidadeMedida );
			 $this->setLargura( $largura );
			 $this->setAltura( $altura );
			 $this->setProfundidade( $profundidade );
			 $this->setPeso( $peso );
			 $this->setCor( $cor );
		}

		public function toArray(){
			 return array(
				 $this->getIdProduto(),
				 $this->getFabricante(),
				 $this->getNome(),
				 $this->getMarca(),
				 $this->getModelo(),
				 $this->getIdCategoria(),
				 $this->getDescricao(),
				 $this->getUnidadeMedida(),
				 $this->getLargura(),
				 $this->getAltura(),
				 $this->getProfundidade(),
				 $this->getPeso(),
				 $this->getCor()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setIdProduto( $idProduto ){
			 $this->idProduto = $idProduto;
		}

		public function getIdProduto(){
			  return( $this->idProduto );
		}

		public function setFabricante( $fabricante ){
			 $this->fabricante = $fabricante;
		}

		public function getFabricante(){
			  return( $this->fabricante );
		}

		public function setNome( $nome ){
			 $this->nome = $nome;
		}

		public function getNome(){
			  return( $this->nome );
		}

		public function setMarca( $marca ){
			 $this->marca = $marca;
		}

		public function getMarca(){
			  return( $this->marca );
		}

		public function setModelo( $modelo ){
			 $this->modelo = $modelo;
		}

		public function getModelo(){
			  return( $this->modelo );
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

		public function setUnidadeMedida( $unidadeMedida ){
			 $this->unidadeMedida = $unidadeMedida;
		}

		public function getUnidadeMedida(){
			  return( $this->unidadeMedida );
		}

		public function setLargura( $largura ){
			 $this->largura = $largura;
		}

		public function getLargura(){
			  return( $this->largura );
		}

		public function setAltura( $altura ){
			 $this->altura = $altura;
		}

		public function getAltura(){
			  return( $this->altura );
		}

		public function setProfundidade( $profundidade ){
			 $this->profundidade = $profundidade;
		}

		public function getProfundidade(){
			  return( $this->profundidade );
		}

		public function setPeso( $peso ){
			 $this->peso = $peso;
		}

		public function getPeso(){
			  return( $this->peso );
		}

		public function setCor( $cor ){
			 $this->cor = $cor;
		}

		public function getCor(){
			  return( $this->cor );
		}

	}


?>