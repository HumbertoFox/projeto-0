<?php
require 'conexao.php';
include 'doador.php';
include 'endereco.php';
include 'irepositoriodoador.php';

class repositorioDoador implements irepositorioDoador
{

    private $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao("", "", "", "");

        if ($this->conexao->conectar() == false) {
            echo "Erro" . mysqli_errno();
        }
    }
    public function cadastrarDoador($doador)
    {
        $nome = $doador->getNome();
        $contato1 = $doador->getContato1();
        $contato2 = $doador->getContato2();
        $contato3 = $doador->getContato3();
        $cep = $doador->getCep();

        $sql = "INSERT INTO doador (codigodoador, nome, contato1, contato2, contato3, cep) VALUES (NULL, '$nome', '$contato1', '$contato2', '$contato3', $cep)";

        $this->conexao->executarQuery($sql);
    }
    public function cadastrarEndereco($endereco)
    {
        $cep = $endereco->getCep();
        $rua = $endereco->getRua();
        $nunresidencia = $endereco->getNunresidencia();
        $cnpj = $endereco->getCnpj();
        $predio = $endereco->getPredio();
        $bloco = $endereco->getBloco();
        $salaap = $endereco->getSalaap();
        $pontoref = $endereco->getPontoref();
        $bairro = $endereco->getBairro();
        $cidade = $endereco->getCidade();

        $sql = "INSERT INTO endereco (cep, rua, $nunresidencia, $cnpj, $predio, $bloco, $salaap, $pontoref, bairro, cidade) VALUES ($cep, '$rua', '$nunresidencia', '$cnpj', '$predio', '$bloco', '$salaap', '$pontoref', '$bairro', '$cidade')";

        $this->conexao->executarQuery($sql);
    }
}
$repositorio = new repositorioDoador();
