<?php

    $dbHost = 'localhost:3308';
    $dbUsername = 'root';
    $dbPassword = 'Matrix317';
    $dbName = 'pratserv';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //if($conexao->connect_errno)
    //{
    //    echo "Erro";
    //}
    //else
    //{
    //    echo "Conexão efetuada com sucesso";
    //}
    
?>