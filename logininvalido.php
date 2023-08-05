<!DOCTYPE html>
<html>

<head>
    <title>Página de Login</title>
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-26">
                        Usuario ou senha invalidos, por favor, cheque as informações e tente novamente!
                    </span>

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
            window.location.href = "login.php";
        }
    </script>
</body>

</html>