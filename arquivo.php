<!DOCTYPE html>
<html>
<head>
    <title>importa arquivo</title>
</head>
<body>
    <h2>Cadastro de Novo Usuário</h2>
    <form action="processa_arquivo.php" method="post">
        <label for="url">Nome:</label>
        <input type="text" name="url" required><br>

        <input type="submit" name="btnImportar" value="Importar">
    </form>
    <form action="processa_arquivo.php" method="post">
        <input type="hidden" name="btnquery1" value="1">
        <input type="submit" value="query1">
    </form>
    <form action="processa_arquivo.php" method="post">
        <input type="hidden" name="btnquery2" value="1">
        <input type="submit" value="query2">
    </form>
    <form action="processa_arquivo.php" method="post">
        <input type="hidden" name="btnquery3" value="1">
        <input type="submit" value="query3">
    </form>
</body>
</html>