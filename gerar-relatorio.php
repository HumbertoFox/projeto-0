<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/report.css">
</head>

<body class="body">
    <main class="container">
        <h1 class="h1">Relatório de Coletas</h1>
        <div class="div-relatory div-relatory-0">
            <section class="section-relatory section-relatory-0">
                <h2 class="h2">Últimas Fichas Coletadas</h2>
            </section>
            <section class="section-relatory section-relatory-1">
                <h2 class="h2">Últimas Fichas Não Coletadas</h2>
            </section>
        </div>
        <div class="div-relatory div-relatory-1">
            <section class="section-relatory section-relatory-2">
                <h2 class="h2">Lista de Fichas Agendadas para Coleta Hoje <strong class="dia_na_semana" id="dia_na_semana"></strong> dia <strong class="data_hoje" id="data_hoje"></strong></h2>
            </section>
            <section class="section-relatory section-relatory-3">
                <h2 class="h2">Lista de Fichas Agendadas dia Anterior <strong class="dia_da_semana" id="dia_da_semana"> </strong> dia <strong class="data_dia_down" id="data_dia_down"></strong></h2>
            </section>
        </div>
        <div class="div-relatory div-relatory-2">
            <section class="section-relatory section-relatory-4">
                <h2 class="h2">Últimas Fichas Cadastradas</h2>
            </section>
        </div>
    </main>
    <script src="./src/js/relatory.js"></script>
</body>

</html>