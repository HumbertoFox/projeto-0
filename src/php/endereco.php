<?php
class endereco
{
    public $cep;
    public $rua;
    public $nunresidencia;
    public $cnpj;
    public $predio;
    public $bloco;
    public $salaap;
    public $pontoref;
    public $bairro;
    public $cidade;

    function __construct($cep, $rua, $nunresidencia, $cnpj, $predio, $bloco, $salaap, $pontoref, $bairro, $cidade)
    {
        $this->cep = $cep;
        $this->rua = $rua;
        $this->nunresidencia = $nunresidencia;
        $this->cnpj = $cnpj;
        $this->predio = $predio;
        $this->bloco = $bloco;
        $this->salaap = $salaap;
        $this->pontoref = $pontoref;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
    }
    function getCep()
    {
        return $this->cep;
    }
    function getRua()
    {
        return $this->rua;
    }
    function getNunresidencia()
    {
        return $this->nunresidencia;
    }
    function getCnpj()
    {
        return $this->cnpj;
    }
    function getPredio()
    {
        return $this->predio;
    }
    function getBloco()
    {
        return $this->bloco;
    }
    function getSalaap()
    {
        return $this->salaap;
    }
    function getPontoref()
    {
        return $this->pontoref;
    }
    function getBairro()
    {
        return $this->bairro;
    }
    function getCidade()
    {
        return $this->cidade;
    }
    function setCep($valor)
    {
        $this->cep = $valor;
    }
    function setRua($valor)
    {
        $this->rua = $valor;
    }
    function setNunresidencia($valor)
    {
        $this->nunresidencia = $valor;
    }
    function setCnpj($valor)
    {
        $this->cnpj = $valor;
    }
    function setPredio($valor)
    {
        $this->predio = $valor;
    }
    function setBloco($valor)
    {
        $this->bloco = $valor;
    }
    function setSalaap($valor)
    {
        $this->salaap = $valor;
    }
    function setPontoref($valor)
    {
        $this->pontoref = $valor;
    }
    function setBairro($valor)
    {
        $this->bairro = $valor;
    }
    function setCidade($valor)
    {
        $this->cidade = $valor;
    }
}
