<?php
	class Institucional {

		private $idInstituicao;
		private $nome;
		private $cpf_cnpj;
		private $tipoPessoa;
		private $endereco;
		private $bairro;
		private $cidade;
		private $uf;
		private $cep;
		private $telefone;
		private $email;
		private $logo;

		function __construct( $idInstituicao, $nome, $cpf_cnpj, $tipoPessoa, $endereco, $bairro, $cidade, $uf, $cep, $telefone, $email, $logo){
			 $this->setIdInstituicao( $idInstituicao );
			 $this->setNome( $nome );
			 $this->setCpf_cnpj( $cpf_cnpj );
			 $this->setTipoPessoa( $tipoPessoa );
			 $this->setEndereco( $endereco );
			 $this->setBairro( $bairro );
			 $this->setCidade( $cidade );
			 $this->setUf( $uf );
			 $this->setCep( $cep );
			 $this->setTelefone( $telefone );
			 $this->setEmail( $email );
			 $this->setLogo( $logo );
		}

		public function toArray(){
			 return array(
				 $this->getIdInstituicao(),
				 $this->getNome(),
				 $this->getCpf_cnpj(),
				 $this->getTipoPessoa(),
				 $this->getEndereco(),
				 $this->getBairro(),
				 $this->getCidade(),
				 $this->getUf(),
				 $this->getCep(),
				 $this->getTelefone(),
				 $this->getEmail(),
				 $this->getLogo()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setIdInstituicao( $idInstituicao ){
			 $this->idInstituicao = $idInstituicao;
		}

		public function getIdInstituicao(){
			  return( $this->idInstituicao );
		}

		public function setNome( $nome ){
			 $this->nome = $nome;
		}

		public function getNome(){
			  return( $this->nome );
		}

		public function setCpf_cnpj( $cpf_cnpj ){
			 $this->cpf_cnpj = $cpf_cnpj;
		}

		public function getCpf_cnpj(){
			  return( $this->cpf_cnpj );
		}

		public function setTipoPessoa( $tipoPessoa ){
			 $this->tipoPessoa = $tipoPessoa;
		}

		public function getTipoPessoa(){
			  return( $this->tipoPessoa );
		}

		public function setEndereco( $endereco ){
			 $this->endereco = $endereco;
		}

		public function getEndereco(){
			  return( $this->endereco );
		}

		public function setBairro( $bairro ){
			 $this->bairro = $bairro;
		}

		public function getBairro(){
			  return( $this->bairro );
		}

		public function setCidade( $cidade ){
			 $this->cidade = $cidade;
		}

		public function getCidade(){
			  return( $this->cidade );
		}

		public function setUf( $uf ){
			 $this->uf = $uf;
		}

		public function getUf(){
			  return( $this->uf );
		}

		public function setCep( $cep ){
			 $this->cep = $cep;
		}

		public function getCep(){
			  return( $this->cep );
		}

		public function setTelefone( $telefone ){
			 $this->telefone = $telefone;
		}

		public function getTelefone(){
			  return( $this->telefone );
		}

		public function setEmail( $email ){
			 $this->email = $email;
		}

		public function getEmail(){
			  return( $this->email );
		}

		public function setLogo( $logo ){
			 $this->logo = $logo;
		}

		public function getLogo(){
			  return( $this->logo );
		}

	}


?>