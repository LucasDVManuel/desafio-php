<!DOCTYPE html>
<html>
<head>
    <title>Página de Login</title>
</head>
<body>
    <h2>Entre com suas credenciais:</h2>
    <form action="autenticacao.php" method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" required><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>