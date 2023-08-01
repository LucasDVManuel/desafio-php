<?php
$host = 'localhost';
$dbname = 'desafio';
$username = 'root';
$password = 'Mysql@2023';


if (isset($_POST['btnImportar'])) {    
    importaDados();
}

if (isset($_POST['btnquery1'])) {
    echo "entrou na query 1";
    $sql = "select * from organizacao where `Number_of_employees` > 5000 order by `name` asc";
    execultaSQL($sql);
}

if (isset($_POST['btnquery2'])) {
    $sql = "select * from organizacao where `Founded` < 2000 and `Number_of_employees` < 1000  order by `Founded` desc";
    execultaSQL($sql);
}

if (isset($_POST['btnquery3'])) {
    $sql = "select * from organizacao";
    execultaSQL($sql);
}

function execultaSQL($sql){
    global $host;
    global $dbname;
    global $username;
    global $password;

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta SQL SELECT
    //$sql = "SELECT * FROM organizacao where Number_of_employees > 5000 order by name asc"; // Substitua 'nome_da_tabela' pelo nome da sua tabela

    // Executa a consulta
    $result = $conn->query($sql);

    // Verifica se há resultados
    if ($result->rowCount() > 0) {
        // Exibe os dados
        echo "<h2>Resultados:</h2>";
        echo "<ul>";
        foreach ($result as $row) {
            echo "<li>{$row['Index']} - {$row['OrganizationId']} - {$row['Name']}</li>"; // Substitua 'coluna1', 'coluna2', etc. pelas colunas que você deseja exibir
        }
        echo "</ul>";
    } else {
        echo "Nenhum resultado encontrado.";
    }
}catch (Exception $e) {
    // Em caso de erro, desfaz a transação
    $conn->rollBack();
    echo "Erro: " . $e->getMessage();
}
}

function sanitizeData(){

    return "resultado consulta";
}

function importaDados(){
global $host;
global $dbname;
global $username;
global $password;
try {
    // Conecta ao banco de dados
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Abre o arquivo CSV para leitura
    //$csvFile = fopen('caminho/para/o/arquivo.csv', 'r');
    $csvFile = fopen($_POST['url'], 'r');

    // Configurações do lote
    $batchSize = 1000; // Tamanho do lote (1000 linhas por vez)

    // Inicia a transação
    $conn->beginTransaction();

    // Loop para ler o CSV e inserir os dados em lotes
    while (($data = fgetcsv($csvFile)) !== false) {
        // Inserir dados no banco de dados
        // Substitua "tabela" pelo nome da sua tabela e "$data[0]", "$data[1]", etc. pelas colunas do CSV
        $sql = "INSERT INTO organizacao (OrganizationId, Name, Website, Country, Description, Founded, Industry, Number_of_employees)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8]]); // Ajuste para a quantidade de colunas no seu CSV

        // Verifica se chegou ao tamanho do lote e, se sim, confirma a transação
        if ($stmt->rowCount() % $batchSize === 0) {
            $conn->commit();
            $conn->beginTransaction();
        }
    }

    // Confirma a transação final (último lote)
    $conn->commit();

    // Fecha o arquivo CSV
    fclose($csvFile);

    echo "Inserção concluída com sucesso!";
} catch (PDOException $e) {
    // Em caso de erro, desfaz a transação
    $conn->rollBack();
    echo "Erro: " . $e->getMessage();
}
}


?>
