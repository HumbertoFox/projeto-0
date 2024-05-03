<?php

require 'conexao.php';

if (empty($dados['nome'])) {
    echo "<script type='text/javascript'>alert('Error: Necessário preencher o campo Nome');</script>";
} elseif (empty($dados['contato1'])) {
    echo "<script type='text/javascript'>alert('Error: Necessário preencher o campo contato1');</script>";
} elseif (empty($dados['contato2'])) {
    echo "<script type='text/javascript'>alert('Error: Necessário preencher o campo contato2');</script>";
} elseif (empty($dados['cep'])) {
    echo "<script type='text/javascript'>alert('Error: Necessário preencher o campo cep');</script>";
} elseif (empty($dados['rua'])) {
    echo "<script type='text/javascript'>alert('Error: Necessário preencher o campo Logradouro');</script>";
} elseif (empty($dados['nunresidencia'])) {
    echo "<script type='text/javascript'>alert('Error: Necessário preencher o campo Número');</script>";
} elseif (empty($dados['bairro'])) {
    echo "<script type='text/javascript'>alert('Error: Necessário preencher o campo bairro');</script>";
} elseif (empty($dados['cidade'])) {
    echo "<script type='text/javascript'>alert('Error: Necessário preencher o campo cidade');</script>";
} elseif (!empty($dados['contato1'])) {
    $query_endereco = "INSERT INTO endereco (cep, rua, nunresidencia, predio, bloco, salaap, pontoref, bairro, cidade) VALUES (:cep, :rua, :nunresidencia, :predio, :bloco, :salaap, :pontoref, :bairro, :cidade)";
    $cad_endereco = $conn->prepare($query_endereco);

    $cad_endereco->bindParam(':cep', $dados['cep']);
    $cad_endereco->bindParam(':rua', $dados['rua']);
    $cad_endereco->bindParam(':nunresidencia', $dados['nunresidencia']);
    $cad_endereco->bindParam(':predio', $dados['predio']);
    $cad_endereco->bindParam(':bloco', $dados['bloco']);
    $cad_endereco->bindParam(':salaap', $dados['salaap']);
    $cad_endereco->bindParam(':pontoref', $dados['pontoref']);
    $cad_endereco->bindParam(':bairro', $dados['bairro']);
    $cad_endereco->bindParam(':cidade', $dados['cidade']);

    $cad_endereco->execute();

    $query_doador = "INSERT INTO doador (codigodoador, nome, contato1, contato2, contato3, cep) VALUES (codigodoador, :nome, :contato1, :contato2, :contato3, :cep)";
    $cad_doador = $conn->prepare($query_doador);
    
    $cad_doador->bindParam(':nome', $dados['nome']);
    $cad_doador->bindParam(':contato1', $dados['contato1']);
    $cad_doador->bindParam(':contato2', $dados['contato2']);
    $cad_doador->bindParam(':contato3', $dados['contato3']);
    $cad_doador->bindParam(':cep', $dados['cep']);
    
    $cad_doador->execute();
    
    if ($cad_doador->rowCount()) {
        $_SESSION['codigodoador'] = $conn->lastInsertId();
        
    }
} elseif (isset($dados['cadastrar_doacao'])) {
    echo "<script type='text/javascript'>alert('Doador Cadastrado Com sucesso!');</script>";
    header('Location: http://localhost/projeto-0/cadastro-doacao.php');
    die();
} elseif (isset($dados['cadastrar_doador'])) {
    header('Location: http://localhost/projeto-0/gerar-relatorio.html');
    die();
}