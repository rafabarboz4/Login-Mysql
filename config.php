<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassorword = '';
    $dbName = 'cadastro';
    $conexao = mysqli_connect($dbHost,$dbUsername,$dbPassorword,$dbName);

    if(!$conexao){
        die('Houve um erro:'.mysqli_connect_error());
    }
?>