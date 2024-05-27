<?php

require_once 'conexao.php';

if (isset($dados['cadastrar_doacao']) || isset($dados['cadastrar_doador'])) {

    if (!empty($dados['contato1']) & !empty($dados['cep'])) {

        $query_ceps = "SELECT zipcode FROM addresszip WHERE zipcode LIKE :cep";
        $res_ceps = $conn->prepare($query_ceps);

        $res_ceps->bindParam(':cep', $dados['cep']);

        $res_ceps->execute();

        while ($row_cep = $res_ceps->fetch(PDO::FETCH_ASSOC)) {

            $_SESSION['rescep'] = $row_cep['cep'];
        }

        if (isset($_SESSION['rescep']) != isset($dados['cep'])) {

            $query_endereco = "INSERT INTO addresszip (zipcode, street, district, city) VALUES (:cep, :rua, :bairro, :cidade)";
            $cad_endereco = $conn->prepare($query_endereco);

            $cad_endereco->bindParam(':cep', $dados['cep']);
            $cad_endereco->bindParam(':rua', $dados['rua']);
            $cad_endereco->bindParam(':bairro', $dados['bairro']);
            $cad_endereco->bindParam(':cidade', $dados['cidade']);

            $cad_endereco->execute();
        }

        $query_contatos = "SELECT contact1 FROM telephone WHERE contact1 LIKE :contato1";
        $res_contatos = $conn->prepare($query_contatos);

        $res_contatos->bindParam(':contato1', $dados['contato1']);

        $res_contatos->execute();

        while ($row_contato = $res_contatos->fetch(PDO::FETCH_ASSOC)) {

            $_SESSION['rescontato1'] = $row_contato['contato1'];
        }

        if (isset($_SESSION['rescontato1']) != isset($dados['contato1'])) {

            $query_telefone = "INSERT INTO telephone (contact1) VALUES (:contato1)";
            $cad_telefone = $conn->prepare($query_telefone);

            $cad_telefone->bindParam(':contato1', $dados['contato1']);

            $cad_telefone->execute();
        }

        $query_doador = "INSERT INTO donor (donorname, contact1, contact2, contact3, zipcode, cadastredate) VALUES (:nome, :contato1, :contato2, :contato3, :cep, STR_TO_DATE('$DATA_HOJE', '%d/%m/%Y'))";
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

        $query_residencia = "INSERT INTO residence (zipcode, nunresidence, building, buildingblock, hallflats, pointref) VALUES (:cep, :nunresidencia, :predio, :bloco, :salaap, :pontoref)";
        $cad_residencia = $conn->prepare($query_residencia);

        $cad_residencia->bindParam(':cep', $dados['cep']);
        $cad_residencia->bindParam(':nunresidencia', $dados['nunresidencia']);
        $cad_residencia->bindParam(':predio', $dados['predio']);
        $cad_residencia->bindParam(':bloco', $dados['bloco']);
        $cad_residencia->bindParam(':salaap', $dados['salaap']);
        $cad_residencia->bindParam(':pontoref', $dados['pontoref']);

        $cad_residencia->execute();

        echo "<span class='sucess_php'>Successfully registered donor!</span><br>";

        if (isset($dados['cadastrar_doacao'])) {
            header('Location: ./cadastro-doacao.php');
        } else {
            header('Location: ./cadastro-doador.php');
        }
    } else {
        echo "<span class='error_php'>Fill in the Name and/or zip code!</span><br>";
    }
}
