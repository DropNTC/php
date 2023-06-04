<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB_NAME', 'teste');

    $banco = new PDO('mysql:host='.HOST.';dbname='.DB_NAME, USER, PASSWORD);

    if($banco){
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        $novo_funcionario = array($nome, $email);
        $gravar = $banco->prepare("insert into pessoa (nome, email) values (?,?)");

        if($gravar->execute($novo_funcionario)){
            echo("<br> Cadastro realizado com sucesso!");
        }else{
            echo("<br> Erro ao cadastrar funcionário!");
        }
        echo('<br><br><a href="index.html">Voltar</a>');
    }
    $banco = null;

?>