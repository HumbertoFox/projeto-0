<?php
session_start();

if (!isset($_SESSION['formulario'])) {
    $_SESSION['formulario'] = 0;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://github.com/HumbertoFox/repository/assets/126817628/52d34872-1dc9-4478-b25d-e01c3cadc230" type="image/x-icon">
    <title>Seleção de Formulário</title>
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/menu.css">
</head>

<body class="body">
    <main class="container">
        <header class="header">
            <nav class="indexnavmenu">
                <img src="./src/images/dinheiro.png" class="icon-empress" alt="Logo Empresa">
                <ul class="ulmenu">
                    <li class="limenu" name="cadastro_doacao">
                        <a href="cadastro-doacao.php" title="Cadastrar Doação" target="menuprincipal">
                            <img class="icon-li" src="./src/images/doacao-de-roupas.png" alt="Icon Doação">
                            <span class="text-li">Cadastrar Doação</span>
                        </a>
                    </li>
                    <li class="limenu" name="cadastro_doador">
                        <a href="cadastro-doador.php" title="Cadastrar Doador" target="menuprincipal">
                            <img class="icon-li" src="./src/images/novo-usuario.png" alt="Icon Doador">
                            <span class="text-li">Cadastrar Doador</span>
                        </a>
                    </li>
                    <li class="limenu" name="editar_doacao">
                        <a href="editar-doacao.php" title="Editar Doação" target="menuprincipal">
                            <img class="icon-li" src="./src/images/doacao.png" alt="Icon Editar Doação">
                            <span class="text-li">Editar Doação</span>
                        </a>
                    </li>
                    <li class="limenu" name="editar_doador">
                        <a href="editar-doador.php" title="Editar Doador" target="menuprincipal">
                            <img class="icon-li" src="./src/images/usuario-verificado.png" alt="Icon Editar Doador">
                            <span class="text-li">Editar Doador</span>
                        </a>
                    </li>
                    <li class="limenu" name="agendar_coleta">
                        <a href="agendar-coleta.php" title="Agendar Coleta" target="menuprincipal">
                            <img class="icon-li" src="./src/images/agenda.png" alt="Icon Agendar coleta">
                            <span class="text-li">Agendar Coleta</span>
                        </a>
                    </li>
                    <li class="limenu" name="confirmar_coleta">
                        <a href="confirmar-coleta.php" title="Confirmar Coleta" target="menuprincipal">
                            <img class="icon-li" src="./src/images/confirmar.png" alt="Icon Confirmar Coleta">
                            <span class="text-li">Confirmar Coleta</span>
                        </a>
                    </li>
                    <li class="limenu activa" name="gerar_relatorio">
                        <a href="gerar-relatorio.php" title="Relatório" target="menuprincipal">
                            <img class="icon-li" src="./src/images/relatorio.png" alt="Icon Relatório">
                            <span class="text-li">Gerar Relatório</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
        <section class="sectionmenu">
            <iframe src="gerar-relatorio.php" title="relatório" name="menuprincipal" frameborder="0">
                <?php
                if ($_SESSION['formulario'] == 0) {
                    include_once './gerar-relatorio.php';
                } elseif ($_SESSION['formulario'] == 1) {
                    include_once './cadastro-doacao.php';
                } elseif ($_SESSION['formulario'] == 2) {
                    include_once './cadastro-doador.php';
                } elseif ($_SESSION['formulario'] == 3) {
                    include_once './editar-doacao.php';
                } elseif ($_SESSION['formulario'] == 4) {
                    include_once './editar-doador.php';
                } elseif ($_SESSION['formulario'] == 5) {
                    include_once './agendar-coleta.php';
                } elseif ($_SESSION['formulario'] == 6) {
                    include_once './confirmar-coleta.php';
                }
                ?>
            </iframe>
        </section>
    </main>
    <script src="./src/js/menu.js"></script>
</body>

</html>