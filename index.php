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
</head>
<body>
    <h2>Voce esta Logado <?php echo $nome_usuario; ?></h2>

    <!-- Menu com a opção "Cadastro de Usuário" -->
    <ul>
        <li><a href="cadastrousuario.php">Cadastro de Usuário</a></li>
        <li><a href="arquivo.php">Importa Arquivo</a></li>
        <li><a href="repositoriogithubusuarios.php">Repositorios Github</a></li>
        
        <!-- Outras opções do menu podem ser adicionadas aqui -->
    </ul>
</body>
</html>