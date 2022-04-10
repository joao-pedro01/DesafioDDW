<?php
    session_start(); 

    include_once 'config.php';
    include_once 'functions.php';

    $Error = "";

    $UserName = $_POST["username"];
    $Password = $_POST["senha"];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $Password = md5($Password);
        $row = DB::queryFirstRow("SELECT * FROM users WHERE username = '$UserName' && password = '$Password' LIMIT 1");
        
        if($row == null){
            echo 'logue por favor!!!';
        }else {
            //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
            if(isset($row)){
                $_SESSION['UserId'] = $row['id'];
                $_SESSION['UserNome'] = $row['nome'];
                $_SESSION['UserName'] = $row['username'];
                $_SESSION['UserCelular'] = $row['celular'];
                $_SESSION['UserEmail'] = $row['email'];
                $_SESSION['UserDate'] = $row['data'];
                $_SESSION['UserHour'] = $row['hora'];
                header("Location: ../pages/Logged.php");
            }
        }
    }