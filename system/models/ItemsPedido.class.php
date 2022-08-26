<?php
	class ItemsPedido {

		private $idItemPedido;
		private $ordem;
		private $idPedido;
		private $idEstoque;
		private $qtdItem;
		private $dtDevolucao;
		private $motivoDevolucao;

		function __construct( $idItemPedido, $ordem, $idPedido, $idEstoque, $qtdItem, $dtDevolucao, $motivoDevolucao){
			 $this->setIdItemPedido( $idItemPedido );
			 $this->setOrdem( $ordem );
			 $this->setIdPedido( $idPedido );
			 $this->setIdEstoque( $idEstoque );
			 $this->setQtdItem( $qtdItem );
			 $this->setDtDevolucao( $dtDevolucao );
			 $this->setMotivoDevolucao( $motivoDevolucao );
		}

		public function toArray(){
			 return array(
				 $this->getIdItemPedido(),
				 $this->getOrdem(),
				 $this->getIdPedido(),
				 $this->getIdEstoque(),
				 $this->getQtdItem(),
				 $this->getDtDevolucao(),
				 $this->getMotivoDevolucao()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setIdItemPedido( $idItemPedido ){
			 $this->idItemPedido = $idItemPedido;
		}

		public function getIdItemPedido(){
			  return( $this->idItemPedido );
		}

		public function setOrdem( $ordem ){
			 $this->ordem = $ordem;
		}

		public function getOrdem(){
			  return( $this->ordem );
		}

		public function setIdPedido( $idPedido ){
			 $this->idPedido = $idPedido;
		}

		public function getIdPedido(){
			  return( $this->idPedido );
		}

		public function setIdEstoque( $idEstoque ){
			 $this->idEstoque = $idEstoque;
		}

		public function getIdEstoque(){
			  return( $this->idEstoque );
		}

		public function setQtdItem( $qtdItem ){
			 $this->qtdItem = $qtdItem;
		}

		public function getQtdItem(){
			  return( $this->qtdItem );
		}

		public function setDtDevolucao( $dtDevolucao ){
			 $this->dtDevolucao = $dtDevolucao;
		}

		public function getDtDevolucao(){
			  return( $this->dtDevolucao );
		}

		public function setMotivoDevolucao( $motivoDevolucao ){
			 $this->motivoDevolucao = $motivoDevolucao;
		}

		public function getMotivoDevolucao(){
			  return( $this->motivoDevolucao );
		}

	}


?>