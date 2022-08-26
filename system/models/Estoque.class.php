<?php
	class Estoque {

		private $idEstoque;
		private $idProduto;
		private $dtEntrada;
		private $quantidade;
		private $dtFabricacao;
		private $dtVencimento;
		private $nfCompra;
		private $precoCompra;
		private $icmsCompra;
		private $precoVenda;
		private $qtdVendida;
		private $qtdOcorrencia;
		private $ocorrencia;

		function __construct( $idEstoque, $idProduto, $dtEntrada, $quantidade, $dtFabricacao, $dtVencimento, $nfCompra, $precoCompra, $icmsCompra, $precoVenda, $qtdVendida, $qtdOcorrencia, $ocorrencia){
			 $this->setIdEstoque( $idEstoque );
			 $this->setIdProduto( $idProduto );
			 $this->setDtEntrada( $dtEntrada );
			 $this->setQuantidade( $quantidade );
			 $this->setDtFabricacao( $dtFabricacao );
			 $this->setDtVencimento( $dtVencimento );
			 $this->setNfCompra( $nfCompra );
			 $this->setPrecoCompra( $precoCompra );
			 $this->setIcmsCompra( $icmsCompra );
			 $this->setPrecoVenda( $precoVenda );
			 $this->setQtdVendida( $qtdVendida );
			 $this->setQtdOcorrencia( $qtdOcorrencia );
			 $this->setOcorrencia( $ocorrencia );
		}

		public function toArray(){
			 return array(
				 $this->getIdEstoque(),
				 $this->getIdProduto(),
				 $this->getDtEntrada(),
				 $this->getQuantidade(),
				 $this->getDtFabricacao(),
				 $this->getDtVencimento(),
				 $this->getNfCompra(),
				 $this->getPrecoCompra(),
				 $this->getIcmsCompra(),
				 $this->getPrecoVenda(),
				 $this->getQtdVendida(),
				 $this->getQtdOcorrencia(),
				 $this->getOcorrencia()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setIdEstoque( $idEstoque ){
			 $this->idEstoque = $idEstoque;
		}

		public function getIdEstoque(){
			  return( $this->idEstoque );
		}

		public function setIdProduto( $idProduto ){
			 $this->idProduto = $idProduto;
		}

		public function getIdProduto(){
			  return( $this->idProduto );
		}

		public function setDtEntrada( $dtEntrada ){
			 $this->dtEntrada = $dtEntrada;
		}

		public function getDtEntrada(){
			  return( $this->dtEntrada );
		}

		public function setQuantidade( $quantidade ){
			 $this->quantidade = $quantidade;
		}

		public function getQuantidade(){
			  return( $this->quantidade );
		}

		public function setDtFabricacao( $dtFabricacao ){
			 $this->dtFabricacao = $dtFabricacao;
		}

		public function getDtFabricacao(){
			  return( $this->dtFabricacao );
		}

		public function setDtVencimento( $dtVencimento ){
			 $this->dtVencimento = $dtVencimento;
		}

		public function getDtVencimento(){
			  return( $this->dtVencimento );
		}

		public function setNfCompra( $nfCompra ){
			 $this->nfCompra = $nfCompra;
		}

		public function getNfCompra(){
			  return( $this->nfCompra );
		}

		public function setPrecoCompra( $precoCompra ){
			 $this->precoCompra = $precoCompra;
		}

		public function getPrecoCompra(){
			  return( $this->precoCompra );
		}

		public function setIcmsCompra( $icmsCompra ){
			 $this->icmsCompra = $icmsCompra;
		}

		public function getIcmsCompra(){
			  return( $this->icmsCompra );
		}

		public function setPrecoVenda( $precoVenda ){
			 $this->precoVenda = $precoVenda;
		}

		public function getPrecoVenda(){
			  return( $this->precoVenda );
		}

		public function setQtdVendida( $qtdVendida ){
			 $this->qtdVendida = $qtdVendida;
		}

		public function getQtdVendida(){
			  return( $this->qtdVendida );
		}

		public function setQtdOcorrencia( $qtdOcorrencia ){
			 $this->qtdOcorrencia = $qtdOcorrencia;
		}

		public function getQtdOcorrencia(){
			  return( $this->qtdOcorrencia );
		}

		public function setOcorrencia( $ocorrencia ){
			 $this->ocorrencia = $ocorrencia;
		}

		public function getOcorrencia(){
			  return( $this->ocorrencia );
		}

	}


?>