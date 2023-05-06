<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'pratserv';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else{
        echo "Conexao efetuada com sucesso";
    }
    

?>