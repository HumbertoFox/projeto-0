<?php

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

var_dump($dados);

if (isset($dados['cadastrar_doacao'])) {
    header('Location: http://localhost/projeto-0/cadastro-doacao.php');
    die();
} elseif(isset($dados['cadastrar_doador'])) {
    header('Location: http://localhost/projeto-0/gerar-relatorio.html');
    die();
}