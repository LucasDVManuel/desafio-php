<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h2>Cadastro de Novo Usuário</h2>
    <form action="processa_cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <label for="ativo">Ativo:</label>
        <input type="checkbox" name="ativo" value="1" checked><br>

        <input type="submit" value="Cadastrar">
        <a href="index.php">Voltar</a>
    </form>
</body>
</html>