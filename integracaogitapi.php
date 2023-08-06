<?php
// Substitua "SEU_USUARIO" pelo nome de usuário do GitHub e "SEU_TOKEN" pelo seu token pessoal
//$usuario_github = 'jhernandes';
$usuario_github = $_POST['usuariogit'];

$token_github = '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';//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

// URL da API do GitHub para obter os repositórios do usuário
$url_api_github = "https://api.github.com/users/{$usuario_github}/repos";

// Configuração da requisição
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url_api_github);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: token {$token_github}",
    "User-Agent: MeuAppGitHub" // Um nome para identificar o seu aplicativo
));

// Executa a requisição e obtém a resposta
$resposta = curl_exec($ch);
curl_close($ch);

// Decodifica a resposta JSON
$repositorios = json_decode($resposta, true);

// Verifica se a requisição foi bem-sucedida
if (is_array($repositorios)) {
    echo "<h1>Repositórios do usuário {$usuario_github}</h1>";
    echo "<a href=\"repositoriogithubusuarios.php\">Voltar</a>";
    foreach ($repositorios as $repo) {
        echo "<h2>{$repo['name']}</h2>";
        echo "<p><strong>Descrição:</strong> {$repo['description']}</p>";
        echo "<p><strong>Número de estrelas:</strong> {$repo['stargazers_count']}</p>";
        echo "<hr>";
    }
} else {
    echo "Não foi possível obter os repositórios do usuário.";
}
?>