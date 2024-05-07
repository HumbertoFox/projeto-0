<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/relatory.css">
</head>

<body class="body">
    <main class="container">
        <section class="relatory-0">
            <h1 class="h1">Relatório de Coleta</h1>
            <div class="div-relatory-0">
                <section class="section-relatory-0">
                    <h2 class="h2">Última Semana</h2>
                </section>
                <section class="section-relatory-1">
                    <h2 class="h2">Último Mês</h2>
                </section>
            </div>
        </section>
        <div class="container-relatory-1-2">
            <section class="relatory-1">
                <h2 class="h2">Lista de Fichas Agendadas para Coleta hoje <strong class="dia_na_semana" id="dia_na_semana"></strong> dia <strong class="data_hoje" id="data_hoje"></strong></h2>
            </section>
            <section class="relatory-2">
                <h2 class="h2">Lista de Fichas Coletadas/não Coletadas dia anterior <strong class="dia_da_semana" id="dia_da_semana"> </strong> dia <strong class="data_dia_down" id="data_dia_down"></strong></h2>
            </section>
        </div>
    </main>

    <script src="./src/js/relatory.js"></script>
</body>

</html>