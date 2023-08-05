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
                <form class="login100-form validate-form" action="autenticacao.php" method="post">
                    <span class="login100-form-title p-b-26">
                        Bem Vindo ao <br> Desafio IPag
                    </span>

                    <div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="usuario" required>
						<span class="focus-input100" data-placeholder="Usuário"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="senha" required>
						<span class="focus-input100" data-placeholder="Senha"></span>
					</div>



                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
</body>

</html>