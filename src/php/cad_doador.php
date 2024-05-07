<?php

include_once 'conexao.php';

if (!empty($dados['contato1']) & !empty($dados['cep'])) {
    $query_endereco = "INSERT INTO endereco (cep, rua, bairro, cidade) VALUES (:cep, :rua, :bairro, :cidade)";
    $cad_endereco = $conn->prepare($query_endereco);

    $cad_endereco->bindParam(':cep', $dados['cep']);
    $cad_endereco->bindParam(':rua', $dados['rua']);
    $cad_endereco->bindParam(':bairro', $dados['bairro']);
    $cad_endereco->bindParam(':cidade', $dados['cidade']);

    $cad_endereco->execute();

    $query_doador = "INSERT INTO doador (nome, contato1, contato2, contato3, cep, datacadastro) VALUES (:nome, :contato1, :contato2, :contato3, :cep, STR_TO_DATE('$DATA_HOJE', '%d/%m/%Y'))";
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

    $query_residencia = "INSERT INTO residencia (cep, nunresidencia, predio, bloco, salaap, pontoref) VALUES (:cep, :nunresidencia, :predio, :bloco, :salaap, :pontoref)";
    $cad_residencia = $conn->prepare($query_residencia);

    $cad_residencia->bindParam(':cep', $dados['cep']);
    $cad_residencia->bindParam(':nunresidencia', $dados['nunresidencia']);
    $cad_residencia->bindParam(':predio', $dados['predio']);
    $cad_residencia->bindParam(':bloco', $dados['bloco']);
    $cad_residencia->bindParam(':salaap', $dados['salaap']);
    $cad_residencia->bindParam(':pontoref', $dados['pontoref']);

    $cad_residencia->execute();
    
} elseif(empty($dados['contato1']) & empty($dados['cep'])) {
    echo "<span class='error_php'>Fill in the Name and/or zip code!</span><br>";
}