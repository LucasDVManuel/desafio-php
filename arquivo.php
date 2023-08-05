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
                    Importar Dados
                </span>


                <form action="processa_arquivo.php" method="post">
                    <label for="url">Url Completa:</label>
                    <input type="text" name="url" required><br>


                    <input type="hidden" name="btnImportar" value="1">
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Importart
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

                <form action="processa_arquivo.php" method="post">
                    <input type="hidden" name="btnquery1" value="1">


                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Consulta 1
                            </button>
                        </div>
                    </div>

                </form>

                <form action="processa_arquivo.php" method="post">
                    <input type="hidden" name="btnquery2" value="1">

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Consulta 2
                            </button>
                        </div>
                    </div>
                </form>

                <form action="processa_arquivo.php" method="post">
                    <input type="hidden" name="btnquery3" value="1">

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Consulta 3
                            </button>
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