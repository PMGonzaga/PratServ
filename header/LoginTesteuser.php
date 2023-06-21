<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);
        

        if(mysqli_num_rows($result) < 1)
        {
            header('Location: index.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: index.php');
        }

        

    }
    else
    {
        //não acessa
        header('Location: inicio.php');
    }

?>