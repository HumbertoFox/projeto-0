<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Doação</title>
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/global.css">
</head>

<body class="body">
    <main class="main">
        <div class="div-form-left">
            <form class="form form-numero-ficha" method="POST" action="">
                <label class="label" for="codigoficha">Código da Doação</label>
                <input class="inputtext" type="search" name="codigoficha" id="codigoficha">
                <div class="divinput divbtnleft">
                    <input class="btninput" type="submit" value="Pesquisar">
                </div>
            </form>
            <form class="form form-infor-doador">
                <fieldset class="fieldset-doador" disabled="disabled">
                    <legend class="label legend">Informações do Doador</legend>
                    <label class="label" class="label" for="nome">Nome do Doador</label>
                    <input class="inputtext" type="text" name="nome" id="nome">
                    <label class="label" for="codigodoador">Código do Doador</label>
                    <input class="inputtext" type="number" name="codigodoador" id="codigodoador">
                    <label class="label" for="contato1">Número Móvel do Responsável</label>
                    <input class="inputtext" type="tel" name="contato1" id="contato1">
                    <label class="label" for="contato2">Número Móvel do Responsável/Opcional</label>
                    <input class="inputtext" type="tel" name="contato2" id="contato2">
                    <label class="label" for="contato3">Número Fixo do Contato/Opcional ou Ramal</label>
                    <input class="inputtext" type="tel" name="contato3" id="contato3">
                    <label class="label" for="cep">Cep</label>
                    <input class="inputtext" type="number" name="cep" id="cep">
                    <label class="label" for="rua">Logradouro: Av/Travessa/Rua</label>
                    <input class="inputtext" type="text" name="rua" id="rua">
                    <label class="label" for="numero">Nº da Casa/Edifício/Empresa</label>
                    <input class="inputtext" type="text" name="numero" id="numero">
                    <label class="label" for="cnpj">Cnpj</label>
                    <input class="inputtext" type="number" name="cnpj" id="cnpj">
                    <label class="label" for="edificio">Nome da Empresa/Edifício</label>
                    <input class="inputtext" type="text" name="edificio" id="edificio">
                    <label class="label" for="bloco">Bloco</label>
                    <input class="inputtext" type="text" name="bloco" id="bloco">
                    <label class="label" for="salaap">Apartamento/Sala</label>
                    <input class="inputtext" type="text" name="salaap" id="salaap">
                    <label class="label" for="pontoref">Ponto de Referência</label>
                    <textarea class="inputtext" name="pontoref" id="pontoref" cols="50" rows="5"></textarea>
                    <label class="label" for="bairro">Bairro/Distrito</label>
                    <input class="inputtext" type="text" name="bairro" id="bairro">
                    <label class="label" for="cidade">Cidade</label>
                    <input class="inputtext" type="text" name="cidade" id="cidade">
                </fieldset>
            </form>
        </div>
        <form class="form form-infor-objetos" method="POST" action="">
            <div class="div-infor-obs">
                <label class="label" for="codigodoacao">Código da Doação</label>
                <input class="inputtext" type="number" name="codigodoacao" id="codigodoacao" readonly>
                <label class="label" for="obs">Observações</label>
                <textarea class="inputtext" name="obs" id="obs" cols="50" rows="5"></textarea>
            </div>
            <legend class="label legend">Lista de objetos a serem doados</legend>
            <div class="div-objetos">
                <div class="div-objetos-quant">
                    <div class="div-objeto">
                        <label class="label" for="objeto1">objeto 1</label>
                        <input class="inputtext objeto" type="text" name="objeto1" id="objeto1">
                    </div>
                    <div class="div-quant">
                        <label class="label" for="quant1">Qantidade/Caixa/Sacola</label>
                        <input class="inputtext quant" type="text" name="quant1" id="quant1">
                    </div>
                </div>
                <div class="div-objetos-quant">
                    <div class="div-objeto">
                        <label class="label" for="objeto2">objeto 2</label>
                        <input class="inputtext objeto" type="text" name="objeto2" id="objeto2">
                    </div>
                    <div class="div-quant">
                        <label class="label" for="quant2">Qantidade/Caixa/Sacola</label>
                        <input class="inputtext quant" type="text" name="quant2" id="quant2">
                    </div>
                </div>
                <div class="div-objetos-quant">
                    <div class="div-objeto">
                        <label class="label" for="objeto3">objeto 3</label>
                        <input class="inputtext objeto" type="text" name="objeto3" id="objeto3">
                    </div>
                    <div class="div-quant">
                        <label class="label" for="quant3">Qantidade/Caixa/Sacola</label>
                        <input class="inputtext quant" type="text" name="quant3" id="quant3">
                    </div>
                </div>
                <div class="div-objetos-quant">
                    <div class="div-objeto">
                        <label class="label" for="objeto4">objeto 4</label>
                        <input class="inputtext objeto" type="text" name="objeto4" id="objeto4">
                    </div>
                    <div class="div-quant">
                        <label class="label" for="quant4">Qantidade/Caixa/Sacola</label>
                        <input class="inputtext quant" type="text" name="quant4" id="quant4">
                    </div>
                </div>
                <div class="div-objetos-quant">
                    <div class="div-objeto">
                        <label class="label" for="objeto5">objeto 5</label>
                        <input class="inputtext objeto" type="text" name="objeto5" id="objeto5">
                    </div>
                    <div class="div-quant">
                        <label class="label" for="quant5">Qantidade/Caixa/Sacola</label>
                        <input class="inputtext quant" type="text" name="quant5" id="quant5">
                    </div>
                </div>
                <div class="div-objetos-quant">
                    <div class="div-objeto">
                        <label class="label" for="objeto6">objeto 6</label>
                        <input class="inputtext objeto" type="text" name="objeto6" id="objeto6">
                    </div>
                    <div class="div-quant">
                        <label class="label" for="quant6">Qantidade/Caixa/Sacola</label>
                        <input class="inputtext quant" type="text" name="quant6" id="quant6">
                    </div>
                </div>
                <div class="div-objetos-quant">
                    <div class="div-objeto">
                        <label class="label" for="objeto7">objeto 7</label>
                        <input class="inputtext objeto" type="text" name="objeto7" id="objeto7">
                    </div>
                    <div class="div-quant">
                        <label class="label" for="quant7">Qantidade/Caixa/Sacola</label>
                        <input class="inputtext quant" type="text" name="quant7" id="quant7">
                    </div>
                </div>
                <div class="div-objetos-quant">
                    <div class="div-objeto">
                        <label class="label" for="objeto8">objeto 8</label>
                        <input class="inputtext objeto" type="text" name="objeto8" id="objeto8">
                    </div>
                    <div class="div-quant">
                        <label class="label" for="quant8">Qantidade/Caixa/Sacola</label>
                        <input class="inputtext quant" type="text" name="quant8" id="quant8">
                    </div>
                </div>
                <div class="div-objetos-quant">
                    <div class="div-objeto">
                        <label class="label" for="objeto9">objeto 9</label>
                        <input class="inputtext objeto" type="text" name="objeto9" id="objeto9">
                    </div>
                    <div class="div-quant">
                        <label class="label" for="quant9">Qantidade/Caixa/Sacola</label>
                        <input class="inputtext quant" type="text" name="quant9" id="quant9">
                    </div>
                </div>
                <div class="div-objetos-quant">
                    <div class="div-objeto">
                        <label class="label" for="objeto10">objeto 10</label>
                        <input class="inputtext objeto" type="text" name="objeto10" id="objeto10">
                    </div>
                    <div class="div-quant">
                        <label class="label" for="quant10">Qantidade/Caixa/Sacola</label>
                        <input class="inputtext quant" type="text" name="quant10" id="quant10">
                    </div>
                </div>
                <div class="div-objetos-quant">
                    <div class="div-objeto">
                        <label class="label" for="objeto11">objeto 11</label>
                        <input class="inputtext objeto" type="text" name="objeto11" id="objeto11">
                    </div>
                    <div class="div-quant">
                        <label class="label" for="quant11">Qantidade/Caixa/Sacola</label>
                        <input class="inputtext quant" type="text" name="quant11" id="quant11">
                    </div>
                </div>
                <div class="div-objetos-quant">
                    <div class="div-objeto">
                        <label class="label" for="objeto12">objeto 12</label>
                        <input class="inputtext objeto" type="text" name="objeto12" id="objeto12">
                    </div>
                    <div class="div-quant">
                        <label class="label" for="quant12">Qantidade/Caixa/Sacola</label>
                        <input class="inputtext quant" type="text" name="quant12" id="quant12">
                    </div>
                </div>
                <div class="div-objetos-quant">
                    <div class="div-objeto">
                        <label class="label" for="objeto13">objeto 13</label>
                        <input class="inputtext objeto" type="text" name="objeto13" id="objeto13">
                    </div>
                    <div class="div-quant">
                        <label class="label" for="quant13">Qantidade/Caixa/Sacola</label>
                        <input class="inputtext quant" type="text" name="quant13" id="quant13">
                    </div>
                </div>
                <div class="div-objetos-quant">
                    <div class="div-objeto">
                        <label class="label" for="objeto14">objeto 14</label>
                        <input class="inputtext objeto" type="text" name="objeto14" id="objeto14">
                    </div>
                    <div class="div-quant">
                        <label class="label" for="quant14">Qantidade/Caixa/Sacola</label>
                        <input class="inputtext quant" type="text" name="quant14" id="quant14">
                    </div>
                </div>
            </div>
            <div class="divinput">
                <input class="btninput" type="submit" value="Editar Doação">
            </div>
        </form>
    </main>
</body>

</html>