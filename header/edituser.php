<?php

    if(!empty($_GET['id']))
    {

        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuario WHERE cpf=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $cpf = $user_data['cpf'];
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $senha = $user_data['senha'];
                $genero = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
                $cep = $user_data['cep'];
                $endereco = $user_data['endereco'];
                $complemento = $user_data['complemento'];
            }

        }
        else
        {
            header('Location: cruduser.php');
        }
        
    }
    else
        {
            header('Location: cruduser.php');
        }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/img/pratserv_logo.jpeg" type="image/x-icon">
    <link href="../assets/dist/css/cadstyle.css" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <a href="admin.php">Voltar</a>
    <div class="box">
        <form action="saveEdituser.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Usuário</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelinput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                    <label for="email" class="labelinput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" value="<?php echo $cpf ?>" required>
                    <label for="cpf" class="labelinput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
                    <label for="telefone" class="labelinput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                    <label for="senha" class="labelinput">Senha</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo" value="feminino" value="<?php echo ($genero == 'feminino') ? 'checked' : '' ?>" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="sexo" value="masculino" value="<?php echo ($genero == 'masculino') ? 'checked' : '' ?>" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outros" name="sexo" value="outros" value="<?php echo ($genero == 'outros') ? 'checked' : '' ?>" required>
                <label for="outros">Outros</label>
                <br><br>
                    <label for="data_nasc"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $data_nasc ?>" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cep" id="cidade" class="inputUser" value="<?php echo $cep ?>" required>
                    <label for="cidade" class="labelinput">CEP</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>" required>
                    <label for="endereco" class="labelinput">Endereço</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="complemento" id="complemento" class="inputUser" value="<?php echo $complemento ?>" required>
                    <label for="complemento" class="labelinput">Complemento</label>
                </div>
                <br><br>
                <input type="submit" class="btn-cad" name="update" id="update" value="Editar">
            </fieldset>
        </form>
    </div>
</body>
</html>