<?php
session_start();

require_once './src/php/cad_doador.php';

$nome = $contato1 = $contato2 = $contato3 = $cep = $rua = $nunresidencia = $cnpj = $predio = $bloco = $salaap = $pontoref = $bairro = $cidade = "";

if (isset($dados['nome'])) {
    $nome = $dados['nome'];
}
if (isset($dados['contato1'])) {
    $contato1 = $dados['contato1'];
}
if (isset($dados['contato2'])) {
    $contato2 = $dados['contato2'];
}
if (isset($dados['contato3'])) {
    $contato3 = $dados['contato3'];
}
if (isset($dados['cep'])) {
    $cep = $dados['cep'];
}
if (isset($dados['$rua'])) {
    $$rua = $dados['$rua'];
}
if (isset($dados['nunresidencia'])) {
    $nunresidencia = $dados['nunresidencia'];
}
if (isset($dados['cnpj'])) {
    $cnpj = $dados['cnpj'];
}
if (isset($dados['predio'])) {
    $predio = $dados['predio'];
}
if (isset($dados['bloco'])) {
    $bloco = $dados['bloco'];
}
if (isset($dados['salaap'])) {
    $salaap = $dados['salaap'];
}
if (isset($dados['pontoref'])) {
    $pontoref = $dados['pontoref'];
}
if (isset($dados['bairro'])) {
    $bairro = $dados['bairro'];
}
if (isset($dados['cidade'])) {
    $cidade = $dados['cidade'];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Doador</title>
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/global.css">
</head>

<body class="body">
    <main class="main">
        <form class="form form-doador" method="POST" action="">
            <label class="label" for="nome">Nome do Doador</label>
            <input class="inputtext" type="text" name="nome" id="nome" value="<?php echo $nome; ?>">
            <label class="label" for="contato1">Número Móvel do Responsável</label>
            <input class="inputtext" type="tel" name="contato1" id="contato1" value="<?php echo $contato1; ?>" minlength="11" maxlength="11">
            <label class="label" for="contato2">Número Móvel do Responsável/Opcional</label>
            <input class="inputtext" type="tel" name="contato2" id="contato2" value="<?php echo $contato2; ?>" minlength="11" maxlength="11">
            <label class="label" for="contato3">Número Fixo do Contato/Opcional ou Ramal</label>
            <input class="inputtext" type="tel" name="contato3" id="contato3" value="<?php echo $contato3; ?>">
            <label class="label" for="cep">Cep</label>
            <input class="inputtext" type="number" name="cep" id="cep" maxlength="9" value="<?php echo $cep; ?>" onblur="pesquisacep(this.value);">
            <label class="label" for="rua">Logradouro: Av/Travessa/Rua</label>
            <input class="inputtext" type="text" name="rua" id="rua" value="<?php echo $rua; ?>">
            <label class="label" for="nunresidencia">Número da Casa/Edifício/Empresa</label>
            <input class="inputtext" type="text" name="nunresidencia" id="nunresidencia" value="<?php echo $nunresidencia; ?>">
            <div class="tipoderesidencia">
                <input type="radio" name="tiporesidencia" id="casa" value="casa" checked>
                <label class="label cursor" for="casa">Casa</label>
                <input type="radio" name="tiporesidencia" id="edificio" value="edificio">
                <label class="label cursor" for="edificio">Edifício</label>
                <input type="radio" name="tiporesidencia" id="empresa" value="empresa">
                <label class="label cursor" for="empresa">Empresa</label>
            </div>
            <label class="ocutar cnpj label" for="cnpj">Cnpj</label>
            <input class="ocutar cnpj inputtext" type="number" name="cnpj" id="cnpj" value="<?php echo $cnpj; ?>">
            <label class="ocutar edificio label" for="predio">Nome do Edifício/Empresa</label>
            <input class="ocutar edificio inputtext" type="text" name="predio" id="predio" value="<?php echo $predio; ?>">
            <label class="ocutar bloco label" for="bloco">Bloco</label>
            <input class="ocutar bloco inputtext label" type="text" name="bloco" id="bloco" value="<?php echo $bloco; ?>">
            <label class="ocutar apartamento label" for="salaap">Apartamento/Sala</label>
            <input class="ocutar apartamento inputtext" type="text" name="salaap" id="salaap" value="<?php echo $salaap; ?>">
            <label class="label" for="pontoref">Ponto de Referência</label>
            <textarea class="inputtext" name="pontoref" id="pontoref" cols="50" rows="5" value="<?php echo $pontoref; ?>"></textarea>
            <label class="label" for="bairro">Bairro/Distrito</label>
            <input class="inputtext" type="text" name="bairro" id="bairro" value="<?php echo $bairro; ?>">
            <label class="label" for="cidade">Cidade</label>
            <input class="inputtext" type="text" name="cidade" id="cidade" value="<?php echo $cidade; ?>">
            <div class="divbtn">
                <div class="divinput">
                    <input class="btninput" type="submit" name="cadastrar_doacao" id="cadastrar_doacao" value="Cadastrar Doação">
                </div>
                <div class="divinput">
                    <input class="btninput" type="submit" name="cadastrar_doador" id="cadastrar_doador" value="Cadastrar Doador">
                </div>
            </div>
        </form>
    </main>

    <script type="module" src="./src/js/cad_doador.js"></script>
    <script src="./src/js/viacep.js"></script>
</body>

</html>