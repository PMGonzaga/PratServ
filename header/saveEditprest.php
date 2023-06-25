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
        $cnpj = $_POST['cnpj'];

        $sqlUpdate = "UPDATE funcionario SET cpf='$cpf', nome='$nome', email='$email', telefone='$telefone', senha='$senha', sexo='$genero', data_nasc='$data_nasc', cnpj='$cnpj' WHERE cpf='$cpf'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: crudprest.php')

?>