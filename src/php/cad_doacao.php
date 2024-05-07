<?php

include_once 'conexao.php';

if (!empty($dados['objeto1']) & !empty($dados['quant1'])) {
    $query_doacao = "INSERT INTO doacao (codigodoador, codigoresidencia, objeto1, quant1, objeto2, quant2, objeto3, quant3, objeto4, quant4, objeto5, quant5, objeto6, quant6, objeto7, quant7, objeto8, quant8, objeto9, quant9, objeto10, quant10, objeto11, quant11, objeto12, quant12, objeto13, quant13, objeto14, quant14, obs, datacadastro) VALUES (:codigodoador, :codigoresidencia, :objeto1, :quant1, :objeto2, :quant2, :objeto3, :quant3, :objeto4, :quant4, :objeto5, :quant5, :objeto6, :quant6, :objeto7, :quant7, :objeto8, :quant8, :objeto9, :quant9, :objeto10, :quant10, :objeto11, :quant11, :objeto12, :quant12, :objeto13, :quant13, :objeto14, :quant14, :obs, STR_TO_DATE('$DATA_HOJE', '%d/%m/%Y'))";
    $cad_doacao = $conn->prepare($query_doacao);

    $cad_doacao->bindParam(':codigodoador', $dados['codigodoador']);
    $cad_doacao->bindParam(':codigoresidencia', $dados['codigoresidencia']);
    $cad_doacao->bindParam(':objeto1', $dados['objeto1']);
    $cad_doacao->bindParam(':quant1', $dados['quant1']);
    $cad_doacao->bindParam(':objeto2', $dados['objeto2']);
    $cad_doacao->bindParam(':quant2', $dados['quant2']);
    $cad_doacao->bindParam(':objeto3', $dados['objeto3']);
    $cad_doacao->bindParam(':quant3', $dados['quant3']);
    $cad_doacao->bindParam(':objeto4', $dados['objeto4']);
    $cad_doacao->bindParam(':quant4', $dados['quant4']);
    $cad_doacao->bindParam(':objeto5', $dados['objeto5']);
    $cad_doacao->bindParam(':quant5', $dados['quant5']);
    $cad_doacao->bindParam(':objeto6', $dados['objeto6']);
    $cad_doacao->bindParam(':quant6', $dados['quant6']);
    $cad_doacao->bindParam(':objeto7', $dados['objeto7']);
    $cad_doacao->bindParam(':quant7', $dados['quant7']);
    $cad_doacao->bindParam(':objeto8', $dados['objeto8']);
    $cad_doacao->bindParam(':quant8', $dados['quant8']);
    $cad_doacao->bindParam(':objeto9', $dados['objeto9']);
    $cad_doacao->bindParam(':quant9', $dados['quant9']);
    $cad_doacao->bindParam(':objeto10', $dados['objeto10']);
    $cad_doacao->bindParam(':quant10', $dados['quant10']);
    $cad_doacao->bindParam(':objeto11', $dados['objeto11']);
    $cad_doacao->bindParam(':quant11', $dados['quant11']);
    $cad_doacao->bindParam(':objeto12', $dados['objeto12']);
    $cad_doacao->bindParam(':quant12', $dados['quant12']);
    $cad_doacao->bindParam(':objeto13', $dados['objeto13']);
    $cad_doacao->bindParam(':quant13', $dados['quant13']);
    $cad_doacao->bindParam(':objeto14', $dados['objeto14']);
    $cad_doacao->bindParam(':quant14', $dados['quant14']);
    $cad_doacao->bindParam(':obs', $dados['obs']);

    $cad_doacao->execute();

    if ($cad_doacao->rowCount()) {
        $_SESSION['codigodoacao'] = $conn->lastInsertId();
    }
} else {
    echo "<span style='color: #A00;'>Fill in at least one object field and/or one quantity field!</span><br>";
}
