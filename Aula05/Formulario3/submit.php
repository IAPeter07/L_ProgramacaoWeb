<?php
    //inicia uma nova sessão ou continua sessão atual
    session_start();
    //Verifica se a pagina foi acessada com método POST
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //Captura os dados do formulário usando o método POST
        $username = $_POST['username']??'Anônimo';
        $email = $_POST['email']??'Sem Email';
        $password = $_POST['password']??"";
        echo("Usuário cadastrado com sucesso!<br>");
        echo("Nome de Usuário:" . htmlspecialchars($username) . "<br>");
        echo("Email:" . htmlspecialchars($email) . "<br>");
    }
    else{
        //Redireciona o usuário de volta ao formulário se não for método POST
        header('Location: register.html');
        exit;
    }
?>