<?php

require 'conexao.php';

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(empty($dados['contato1'])) {
    echo "<script type='text/javascript'>alert('Nome esta em Branco');</script>";
} else {
    if (!empty($dados['contato1'])) {
        $query_doador = "INSERT INTO doador (nome, contato1, contato2, contato3, cep) VALUES (codigodoador, :nome, :contato1, :contato2, :contato3, :cep)";
        
    } elseif (isset($dados['cadastrar_doacao'])) {
        // echo "<script type='text/javascript'>alert('Doador Cadastrado Com sucesso!');</script>";
        header('Location: http://localhost/projeto-0/cadastro-doacao.php');
        die();
    } elseif (isset($dados['cadastrar_doador'])) {
        header('Location: http://localhost/projeto-0/gerar-relatorio.html');
        die();
    }
}