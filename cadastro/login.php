<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/dist/css/logstyle.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça Login<br>E resolva seus problemas</h1>
            <img src="../assets/img/cliente.svg" class="left-login-image" alt="">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <form action="testeLogin.php" method="post">
                <div class="textfield">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <input type="submit" class="btn-login" name="submit" value="Login">
                </form>
                <a href="cadastro.php"><button class="btn-login">Cadastrar</button></a>
                <a href="../header/index.php"><button class="btn-login">Voltar</button></a>
            </div>
        </div>
    </div>
</body>
</html>