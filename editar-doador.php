<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Doador</title>
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/global.css">
    <link rel="stylesheet" href="./src/css/edite-doacao.css">
</head>

<body class="body">
    <main class="main">
        <form class="form form-numero-ficha" method="POST" action="">
            <label class="label" for="codigodoador">Código/Telefone/Nome do Doador</label>
            <input class="inputtext" type="search" name="codigodoador" id="codigodoador">
            <div class="divinput">
                <input class="btninput" type="submit" value="Pesquisar">
            </div>
        </form>
        <form class="form form-doador" method="POST" action="">
            <label class="label" for="codigodoador">Código do Doador</label>
            <input class="inputtext" type="number" name="codigodoador" id="codigodoador" readonly>
            <label class="label" for="nome">Nome do Doador</label>
            <input class="inputtext" type="text" name="nome" id="nome">
            <label class="label" for="contato1">Número Móvel do Responsável</label>
            <input class="inputtext" type="tel" name="contato1" id="contato1" minlength="11" maxlength="11">
            <label class="label" for="contato2">Número Móvel do Responsável/Opcional</label>
            <input class="inputtext" type="tel" name="contato2" id="contato2" minlength="11" maxlength="11">
            <label class="label" for="contato3">Número Fixo do Contato/Opcional ou Ramal</label>
            <input class="inputtext" type="tel" name="contato3" id="contato3">
            <label class="label" for="cep">Cep</label>
            <input class="inputtext" type="number" name="cep" id="cep" maxlength="9" value="" onblur="pesquisacep(this.value);">
            <label class="label" for="rua">Logradouro: Av/Travessa/Rua</label>
            <input class="inputtext" type="text" name="rua" id="rua">
            <label class="label" for="nunresidencia">Número da Casa/Edifício/Empresa</label>
            <input class="inputtext" type="text" name="nunresidencia" id="nunresidencia">
            <div class="tipo-deresidencia">
                <input type="radio" name="tiporesidencia" id="casa" value="casa">
                <label class="label cursor" for="casa">Casa</label>
                <input type="radio" name="tiporesidencia" id="edificio" value="edificio">
                <label class="label cursor" for="edificio">Edifício</label>
                <input type="radio" name="tiporesidencia" id="empresa" value="empresa">
                <label class="label cursor" for="empresa">Empresa</label>
            </div>
            <label class="ocutar cnpj label" for="cnpj">Cnpj</label>
            <input class="ocutar cnpj inputtext" type="number" name="cnpj" id="cnpj">
            <label class="ocutar edificio label" for="predio">Nome do Edifício/Empresa</label>
            <input class="ocutar edificio inputtext" type="text" name="predio" id="predio">
            <label class="ocutar bloco label" for="bloco">Bloco</label>
            <input class="ocutar bloco inputtext label" type="text" name="bloco" id="bloco">
            <label class="ocutar apartamento label" for="salaap">Apartamento/Sala</label>
            <input class="ocutar apartamento inputtext" type="text" name="salaap" id="salaap">
            <label class="label" for="pontoref">Ponto de Referência</label>
            <textarea class="inputtext" name="pontoref" id="pontoref" cols="50" rows="5"></textarea>
            <label class="label" for="bairro">Bairro/Distrito</label>
            <input class="inputtext" type="text" name="bairro" id="bairro">
            <label class="label" for="cidade">Cidade</label>
            <input class="inputtext" type="text" name="cidade" id="cidade">
            <div class="divinput">
                <input class="btninput" type="submit" value="Editar Doador">
            </div>
        </form>
    </main>

    <script type="module" src="./src/js/cad_doador.js"></script>
    <script src="./src/js/viacep.js"></script>
</body>

</html>