<?php

    if(isset($_POST['submit']))
    {

        include_once('config.php');
        
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $genero = $_POST['sexo'];
        $data_nasc = $_POST['data_nasc'];
        $cnpj = $_POST['cnpj'];

        $result = mysqli_query($conexao, "INSERT INTO funcionario(cpf,nome,email,telefone,senha,sexo,data_nasc,cnpj) VALUES ('$cpf','$nome','$email','$telefone','$senha','$genero','$data_nasc','$cnpj')");

        header('Location: inicio.php');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../assets/img/pratserv_logo.jpeg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/dist/css/cadstyle.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form action="cadastroprest.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Usuário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelinput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelinput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelinput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelinput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelinput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="cnpj" id="cidade" class="inputUser" required>
                    <label for="cnpj" class="labelinput">CNPJ</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outros" name="sexo" value="outros" required>
                <label for="outros">Outros</label>
                <br><br>
                    <label for="data_nasc"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nasc" id="data_nasc" required>
                <br><br><br>
                <input type="submit" class="btn-cad" name="submit" id="submit" value="Enviar">
            </fieldset>
        </form>
    </div>
</body>
</html>