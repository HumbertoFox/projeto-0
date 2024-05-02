<?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump($dados);

if (isset($dados['cadastrar_agendar'])) {
    // echo "<script type='text/javascript'>alert('teste');</script>";
    header('Location: http://localhost/projeto-0/agendar-coleta.php');
    die();
} elseif(isset($dados['cadastrar_doacao'])) {
    header('Location: http://localhost/projeto-0/gerar-relatorio.html');
    die();
}