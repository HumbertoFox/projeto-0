<?php
class doador
{
    public $codigodoador;
    public $nome;
    public $contato1;
    public $contato2;
    public $contato3;
    public $cep;

    function __construct($codigodoador, $nome, $contato1, $contato2, $contato3, $cep)
    {
        $this->codigodoador = $codigodoador;
        $this->nome = $nome;
        $this->contato1 = $contato1;
        $this->contato2 = $contato2;
        $this->contato3 = $contato3;
        $this->cep = $cep;
    }
    function getCodigoDoador()
    {
        return $this->codigodoador;
    }
    function getNome()
    {
        return $this->nome;
    }
    function getContato1()
    {
        return $this->contato1;
    }
    function getContato2()
    {
        return $this->contato2;
    }
    function getTContato3()
    {
        return $this->contato3;
    }
    function getCep()
    {
        return $this->cep;
    }
    function setCodigoDoador($valor)
    {
        $this->codigodoador = $valor;
    }
    function setNome($valor)
    {
        $this->nome = $valor;
    }
    function setContato1($valor)
    {
        $this->contato1 = $valor;
    }
    function setContato2($valor)
    {
        $this->contato2 = $valor;
    }
    function setContato3($valor)
    {
        $this->contato3 = $valor;
    }
    function setCep($valor)
    {
        $this->cep = $valor;
    }
}