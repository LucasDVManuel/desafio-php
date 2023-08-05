<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form" action="processa_cadastro.php" method="post">
                    <span class="login100-form-title p-b-26">
                        Cadastrar novo Usuario
                    </span>

                    <label  for="nome">Nome:</label>
                    <input  type="text" name="nome" required><br>


                    <label for="usuario">Usuário:</label>
                    <input type="text" name="usuario" required><br>


                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" required><br>


                    <label for="ativo">Ativo:</label>
                    <input type="checkbox" name="ativo" value="1" checked><br>


                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Cadastrar
                            </button>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="button" onclick="redirecionar()">Voltar</button>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function redirecionar() {
            window.location.href = "index.php";
        }
    </script>
</body>

</html>