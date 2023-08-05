<?php
session_start(); // Iniciar a sessão

// Verificar se o usuário está logado (se a sessão está definida)

if (isset($_SESSION["nome_usuario"])) {
    $nome_usuario = $_SESSION["nome_usuario"];

    // Agora você pode mostrar o nome do usuário na página nova_pagina.php
} else {
    // Se o usuário não estiver logado, redirecionar novamente para o formulário de login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tela Principal</title>
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-26">
                        <h2>Bem Vindo <?php echo $nome_usuario; ?></h2>
                    </span>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="button" onclick="redirecionarCadastro()">
                            Cadastro de Usuário
                            </button>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="button" onclick="redirecionarArquivo()">
                            Importa Arquivo
                            </button>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="button"  onclick="redirecionarGithub()">
                            Repositorios Github
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function redirecionarGithub() {
            window.location.href = "repositoriogithubusuarios.php";
        }
        function redirecionarArquivo() {
            window.location.href = "arquivo.php";
        }
        function redirecionarCadastro() {
            window.location.href = "cadastrousuario.php";
        }
    </script>
</body>

</html>