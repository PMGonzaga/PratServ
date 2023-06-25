<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];
        $genero = $_POST['sexo'];
        $data_nasc = $_POST['data_nasc'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $complemento = $_POST['complemento'];

        $sqlUpdate = "UPDATE usuario SET cpf='$cpf', nome='$nome', email='$email', telefone='$telefone', senha='$senha', sexo='$genero', data_nasc='$data_nasc', cep='$cep', endereco='$endereco', complemento='$complemento' WHERE cpf='$cpf'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: cruduser.php')

?>