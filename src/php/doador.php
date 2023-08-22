<?php
    class doador {
        public $codigodoador;
        public $nome;
        public $contato1;
        public $contato;
		public $cep;
        
        function __construct($codigodoador, $nome, $contato1, $contato2, $contato3, $cep) {
            $this->codigodoador = $codigodoador;
            $this->nome = $nome;
            $this->contato1 = $contato1;
			$this->contato2 = $contato2;
			$this->contato3 = $contato3;
			$this->cep = $cep;
        }
        function getCodigoDoador(){
            return $this->codigodoador;
        }
        function getNome(){
            return $this->nome;
        }
        function getContato1(){
            return $this->contato1;
        }
        function getContato2(){
            return $this->contato2;
        }
		function getTContato3(){
			return $this->contato3;
		}
		function getCep(){
            return $this->cep;
        }
        function setCodigoDoador($valor){
            $this->codigodoador = $valor;
        }
        function setNome($valor){
            $this->nome = $valor;
        }
        function setContato1($valor){
            $this->contato1 = $valor;
        }
        function setContato2($valor){
            $this->contato2 = $valor;
        }
        function setContato3($valor){
            $this->contato3 = $valor;
        }
		function setCep($valor){
            $this->cep = $valor;
        }
    }
?>

<?php
    class endereco{
		public $cep;
		public $rua;
		public $bairro;
		public $cidade;
        
        function __construct($cep, $rua, $bairro, $cidade) {
			$this->cep = $cep;
			$this->rua = $rua;
			$this->bairro = $bairro;
			$this->cidade = $cidade;
        }
		function getCep(){
            return $this->cep;
        }
		function getRua(){
            return $this->rua;
        }
		function getBairro(){
            return $this->bairro;
        }
		function getCidade(){
            return $this->cidade;
        }
		function setCep($valor){
            $this->cep = $valor;
        }
		function setRua($valor){
            $this->rua = $valor;
        }
		function setBairro($valor){
            $this->bairro = $valor;
        }
		function setCidade($valor){
            $this->cidade = $valor;
        }
    }
?>

<?php
    class residencia {
		public $edificio;
		public $numero;
		public $apt;
		public $bloco;
		public $pontoreferencia;
		public $cep;
        
        function __construct($edificio, $numero, $apt, $bloco, $pontoreferencia, $cep) {
			$this->edificio = $edificio;
			$this->numero = $numero;
			$this->apt = $apt;
			$this->bloco = $bloco;
			$this->pontoreferencia = $pontoreferencia;
			$this->cep = $cep;
        }
		function getEdificio(){
            return $this->edificio;
        }
		function getNumero(){
            return $this->numero;
        }
		function getApt(){
            return $this->apt;
        }
		function getBloco(){
            return $this->bloco;
        }
		function getPontoreferencia(){
            return $this->pontoreferencia;
        }
		function getCep(){
            return $this->cep;
        }
		function setEdificio($valor){
            $this->edificio = $valor;
        }
		function setNumero($valor){
            $this->numero = $valor;
        }
		function setApt($valor){
            $this->apt = $valor;
        }
		function setBloco($valor){
            $this->bloco = $valor;
        }
		function setPontoreferencia($valor){
            $this->pontoreferencia = $valor;
        }
		function setCep($valor){
            $this->cep = $valor;
        }
    }
?>