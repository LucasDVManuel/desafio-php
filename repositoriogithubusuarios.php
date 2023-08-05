<!DOCTYPE html>
<html>
<head>
    <title>importa arquivo</title>
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <span class="login100-form-title p-b-26">
                    Pesquisar Perfil
                </span>


    <form action="integracaogitapi.php" method="post">
        <label for="usuariogit">Usuario Git:</label>
        <input type="text" name="usuariogit" required><br>


        <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                            Consultar
                            </button>
                        </div>
                    </div>
    </form>

    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" type="button" onclick="redirecionar()">Voltar</button>

                        </div>
                    </div>
    
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