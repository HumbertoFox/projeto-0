<?php
require 'conexao.php';
include 'doador.php';
include 'endereco.php';
include 'residencia.php';
include 'residenciacasa.php';
include 'irepositoriodoador.php';

class repositorioDoador implements irepositorioDoador {
    
    private $conexao;
    
    public function __construct() {
        $this->conexao=new Conexao("", "", "", "");
        
        if ($this->conexao->conectar() == false){
            echo "Erro".mysqli_errno();
        }
    }
	public function cadastrarEndereco($endereco) {
		$cep = $endereco->getCep();
		$rua = $endereco->getRua();
		$bairro = $endereco->getBairro();
		$cidade = $endereco->getCidade();
		
        $sql = "INSERT INTO endereco (cep, rua, bairro, cidade) VALUES ($cep, '$rua', '$bairro', '$cidade')";
		
        $this->conexao->executarQuery($sql);
    }
	public function cadastrarResidencia($residencia) {
		$edificio = $residencia->getEdificio();
		$numero = $residencia->getNumero();
		$apt = $residencia->getApt();
		$bloco = $residencia->getBloco();
		$pontoreferencia = $residencia->getPontoreferencia();
		$cep = $residencia->getCep();
		
        $sql = "INSERT INTO residencia (cep, numero, edificio, apt, bloco, pontoreferencia) VALUES ($cep, '$numero', '$edificio', '$apt', '$bloco', '$pontoreferencia')";
		
        $this->conexao->executarQuery($sql);
    }
	public function cadastrarResidenciaCasa($residenciacasa) {
		$cep = $residenciacasa->getCep();
		$numero = $residenciacasa->getNumero();
		$pontoreferencia = $residenciacasa->getPontoreferencia();
		
        $sql = "INSERT INTO residencia (cep, numero, pontoreferencia) VALUES ($cep, '$numero', '$pontoreferencia')";
		
        $this->conexao->executarQuery($sql);
    }
    public function cadastrarDoador($doador) {
        $nome = $doador->getNome();
        $contato1 = $doador->getContato1();
		$contato2 = $doador->getContato2();
        $contato3 = $doador->getContato3();
		$cep = $doador->getCep();
		
        $sql = "INSERT INTO doador (codigodoador, nome, contato1, contato2, contato3, cep) VALUES (NULL, '$nome', '$contato1', '$contato2', '$contato3', $cep)";
		
        $this->conexao->executarQuery($sql);
    }
}
    $repositorio = new repositorioDoador();
?>