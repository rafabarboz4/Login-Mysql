<?php
    include("config.php");
    $username = $_POST["name_input"];
    $email = $_POST["email_input"];
    $password = $_POST["password_input"];

    $sql = "INSERT INTO usuarios(username, email, senha) 
            VALUES ('$username', '$email', '$password')";

    if(mysqli_query($conexao, $sql)){  
        echo "Usuario cadastrado com sucesso";
    }else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
    //http://localhost/cadastro/cadastro.php
    //O mysql so funciona no localhost, então coloque sempre na pasta do xamp
?>