<?php
    include("config.php");
    if(empty($_POST['email_input']) || empty($_POST['password_input'])){
        header('Location: index.html');
        exit();
    }
    
    $email = mysqli_real_escape_string($conexao,$_POST["email_input"]);
    $senha = mysqli_real_escape_string($conexao,$_POST["password_input"]);

    $query = "SELECT * FROM usuarios where email = '$email' and senha = '$senha'";
    $result = mysqli_query($conexao, $query);
    $row = mysqli_num_rows($result);

    if($row == 1){
        echo "<script>alert('Usuário encontrado.')</script>";
        exit();
    }else{
        header('Location: index.html');
        exit();
    }

?>