<?php
    include_once 'config.php';
    include_once 'functions.php';

    $Error = "";
    $Sucess = "";

    $UserName = $_POST["username"];
    $Email = $_POST["email"];
    $Password = $_POST["senha"];
    $DateNasc = $_POST["datanasc"];
      
    $Date = date('Y-m-d');
    $Hour = date('H:i:s');

    // Processando dados do formulário quando o formulário é enviado
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($UserName))){
            $Error = "O nome de usuário não pode estar vazio!!!";
            Invalid($Error);
        // Validação de erro caso algum caractere invalido seja inputado no $UserName
        }else if(!preg_match('/^[a-zA-Z0-9_]+$/', trim($UserName))){
            $Error = "O nome de usuário pode conter apenas letras, números e _.";
            Invalid($Error);

        //Caso não encontre erro.
        }else {
            //Procura por $Username no DB
            $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE username = '{$UserName}'");
            //$sql = DB::query(" SELECT * FROM users where username = '{$UserName}' ");

            if($sql[0]){
                $Error = "Usuário já exite";
                Invalid($Error);
            }
        }
        /*
            input password
        */
        if(empty(trim($Password))){
            $Error = "Senha é obrigatório e não pode estar vazio!!!";
            Invalid($Error);
        // Validação de erro caso algum caractere invalido seja inputado no $UserName
        }else {
            // criptografia da senha
            $Password = md5($Password);
        }
        /*
            INSERT TABLE USERS
        */
        if ($Error = false){
            $Error = "Algo deu errado";
            Invalid($Error);
        }else {
            //dd($Password);
            DB::insert('users', [
                'username' => $UserName,
                'email' => $Email,
                'password' => $Password,
                'date_nasc' => $DateNasc,
                'date' => $Date,
                'hour' => $Hour
                ]);
            $sql = DB::queryFirstField("SELECT COUNT(*) FROM users WHERE username = '{$UserName}'");

            if($sql[0]){
                header("location: ../pages/login.php");
                $Sucess =  'Usuário cadastrado com sucesso!!!.';
                Sucess($Sucess);
            }
        }
    }
?>