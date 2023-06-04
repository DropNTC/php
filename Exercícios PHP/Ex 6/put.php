<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB_NAME', 'teste');

    $banco = new PDO('mysql:host='.HOST.';dbname='.DB_NAME, USER, PASSWORD);

    if($banco){
        $editar = $banco->prepare("update pessoa set email=? where nome=?");
        
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        $editar->execute(array($email,$nome));
        if($editar){
            echo ("<br> Atualização feita com sucesso!");
        }else{
            echo("<br> Erro ao atualizar funcionário!");
        }
        echo('<br><br><a href="index.html">Voltar</a>');
    }
    $banco = null;

?>