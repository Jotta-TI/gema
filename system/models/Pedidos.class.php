<?php
	class Pedidos {

		private $idPedido;
		private $idUsuario;
		private $dtPedido;
		private $dtPagamento;
		private $dtNotaFiscal;
		private $notaFiscal;
		private $dtEnvio;
		private $dtRecebimento;
		private $tipoFrete;
		private $rastreioFrete;
		private $entregaendereco;
		private $entregaNumero;
		private $entregaCompl;
		private $entregaBairro;
		private $entregaCidade;
		private $entregaUF;
		private $entregaCEP;
		private $entregaTelefone;
		private $entregaRefer;
		private $valorTotal;
		private $qtdItems;
		private $dtDevolucao;
		private $motivoDevolucao;

		function __construct( $idPedido, $idUsuario, $dtPedido, $dtPagamento, $dtNotaFiscal, $notaFiscal, $dtEnvio, $dtRecebimento, $tipoFrete, $rastreioFrete, $entregaendereco, $entregaNumero, $entregaCompl, $entregaBairro, $entregaCidade, $entregaUF, $entregaCEP, $entregaTelefone, $entregaRefer, $valorTotal, $qtdItems, $dtDevolucao, $motivoDevolucao){
			 $this->setIdPedido( $idPedido );
			 $this->setIdUsuario( $idUsuario );
			 $this->setDtPedido( $dtPedido );
			 $this->setDtPagamento( $dtPagamento );
			 $this->setDtNotaFiscal( $dtNotaFiscal );
			 $this->setNotaFiscal( $notaFiscal );
			 $this->setDtEnvio( $dtEnvio );
			 $this->setDtRecebimento( $dtRecebimento );
			 $this->setTipoFrete( $tipoFrete );
			 $this->setRastreioFrete( $rastreioFrete );
			 $this->setEntregaendereco( $entregaendereco );
			 $this->setEntregaNumero( $entregaNumero );
			 $this->setEntregaCompl( $entregaCompl );
			 $this->setEntregaBairro( $entregaBairro );
			 $this->setEntregaCidade( $entregaCidade );
			 $this->setEntregaUF( $entregaUF );
			 $this->setEntregaCEP( $entregaCEP );
			 $this->setEntregaTelefone( $entregaTelefone );
			 $this->setEntregaRefer( $entregaRefer );
			 $this->setValorTotal( $valorTotal );
			 $this->setQtdItems( $qtdItems );
			 $this->setDtDevolucao( $dtDevolucao );
			 $this->setMotivoDevolucao( $motivoDevolucao );
		}

		public function toArray(){
			 return array(
				 $this->getIdPedido(),
				 $this->getIdUsuario(),
				 $this->getDtPedido(),
				 $this->getDtPagamento(),
				 $this->getDtNotaFiscal(),
				 $this->getNotaFiscal(),
				 $this->getDtEnvio(),
				 $this->getDtRecebimento(),
				 $this->getTipoFrete(),
				 $this->getRastreioFrete(),
				 $this->getEntregaendereco(),
				 $this->getEntregaNumero(),
				 $this->getEntregaCompl(),
				 $this->getEntregaBairro(),
				 $this->getEntregaCidade(),
				 $this->getEntregaUF(),
				 $this->getEntregaCEP(),
				 $this->getEntregaTelefone(),
				 $this->getEntregaRefer(),
				 $this->getValorTotal(),
				 $this->getQtdItems(),
				 $this->getDtDevolucao(),
				 $this->getMotivoDevolucao()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setIdPedido( $idPedido ){
			 $this->idPedido = $idPedido;
		}

		public function getIdPedido(){
			  return( $this->idPedido );
		}

		public function setIdUsuario( $idUsuario ){
			 $this->idUsuario = $idUsuario;
		}

		public function getIdUsuario(){
			  return( $this->idUsuario );
		}

		public function setDtPedido( $dtPedido ){
			 $this->dtPedido = $dtPedido;
		}

		public function getDtPedido(){
			  return( $this->dtPedido );
		}

		public function setDtPagamento( $dtPagamento ){
			 $this->dtPagamento = $dtPagamento;
		}

		public function getDtPagamento(){
			  return( $this->dtPagamento );
		}

		public function setDtNotaFiscal( $dtNotaFiscal ){
			 $this->dtNotaFiscal = $dtNotaFiscal;
		}

		public function getDtNotaFiscal(){
			  return( $this->dtNotaFiscal );
		}

		public function setNotaFiscal( $notaFiscal ){
			 $this->notaFiscal = $notaFiscal;
		}

		public function getNotaFiscal(){
			  return( $this->notaFiscal );
		}

		public function setDtEnvio( $dtEnvio ){
			 $this->dtEnvio = $dtEnvio;
		}

		public function getDtEnvio(){
			  return( $this->dtEnvio );
		}

		public function setDtRecebimento( $dtRecebimento ){
			 $this->dtRecebimento = $dtRecebimento;
		}

		public function getDtRecebimento(){
			  return( $this->dtRecebimento );
		}

		public function setTipoFrete( $tipoFrete ){
			 $this->tipoFrete = $tipoFrete;
		}

		public function getTipoFrete(){
			  return( $this->tipoFrete );
		}

		public function setRastreioFrete( $rastreioFrete ){
			 $this->rastreioFrete = $rastreioFrete;
		}

		public function getRastreioFrete(){
			  return( $this->rastreioFrete );
		}

		public function setEntregaendereco( $entregaendereco ){
			 $this->entregaendereco = $entregaendereco;
		}

		public function getEntregaendereco(){
			  return( $this->entregaendereco );
		}

		public function setEntregaNumero( $entregaNumero ){
			 $this->entregaNumero = $entregaNumero;
		}

		public function getEntregaNumero(){
			  return( $this->entregaNumero );
		}

		public function setEntregaCompl( $entregaCompl ){
			 $this->entregaCompl = $entregaCompl;
		}

		public function getEntregaCompl(){
			  return( $this->entregaCompl );
		}

		public function setEntregaBairro( $entregaBairro ){
			 $this->entregaBairro = $entregaBairro;
		}

		public function getEntregaBairro(){
			  return( $this->entregaBairro );
		}

		public function setEntregaCidade( $entregaCidade ){
			 $this->entregaCidade = $entregaCidade;
		}

		public function getEntregaCidade(){
			  return( $this->entregaCidade );
		}

		public function setEntregaUF( $entregaUF ){
			 $this->entregaUF = $entregaUF;
		}

		public function getEntregaUF(){
			  return( $this->entregaUF );
		}

		public function setEntregaCEP( $entregaCEP ){
			 $this->entregaCEP = $entregaCEP;
		}

		public function getEntregaCEP(){
			  return( $this->entregaCEP );
		}

		public function setEntregaTelefone( $entregaTelefone ){
			 $this->entregaTelefone = $entregaTelefone;
		}

		public function getEntregaTelefone(){
			  return( $this->entregaTelefone );
		}

		public function setEntregaRefer( $entregaRefer ){
			 $this->entregaRefer = $entregaRefer;
		}

		public function getEntregaRefer(){
			  return( $this->entregaRefer );
		}

		public function setValorTotal( $valorTotal ){
			 $this->valorTotal = $valorTotal;
		}

		public function getValorTotal(){
			  return( $this->valorTotal );
		}

		public function setQtdItems( $qtdItems ){
			 $this->qtdItems = $qtdItems;
		}

		public function getQtdItems(){
			  return( $this->qtdItems );
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