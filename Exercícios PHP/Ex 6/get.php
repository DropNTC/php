<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB_NAME', 'teste');

    $banco = new PDO('mysql:host='.HOST.';dbname='.DB_NAME, USER, PASSWORD);

    if($banco){

        $consulta = $banco->prepare("select * from pessoa");
        $consulta->execute();
        $linha = $consulta->fetchAll(PDO::FETCH_OBJ);

        foreach($linha as $func){
            echo("<br>Nome = ". $func->nome.
            "<br> Departamento = ". $func->email);
            echo("<br>---------------------------");
        }
        echo('<br><br><a href="index.html">Voltar</a>');
    }    
    $banco = null;

?>