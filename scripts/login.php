<?php
    session_start();

    include_once 'config.php';
    include_once 'functions.php';

    $Error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $UserName = $_POST["username"];
        $Password = $_POST["senha"];
        $Password = md5($Password);
        $row = DB::queryFirstRow("SELECT * FROM users WHERE username = '$UserName' && password = '$Password' LIMIT 1");
        
        if($row == null){
            $Error = "Senha ou usuário inválido!!!";
            Invalid($Error);
        }else {
            //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
            if(isset($row)){
                $_SESSION['UserName'] = $row['username'];
                $_SESSION['UserEmail'] = $row['email'];
                header("Location: ../index.html");
            }
        }
    }else if($_SESSION['UserName'] == null){
        header("location: ../pages/login.php");
        $Error = "Logue por favor";
        Invalid($Error);
    }