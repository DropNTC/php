<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB_NAME', 'Aula');

    $banco = new PDO('mysql:host='.HOST.';dbname='.DB_NAME, USER, PASSWORD);

    if($banco){
        $nome = $_POST["nome"];
        $deletar = $banco->prepare("delete from pessoa where nome=?");
        $deletar->execute(array($nome));

        if($deletar){
            echo("<br> Funcionário excluído com sucesso!");
        }else{
            echo("<br> Erro ao excluir funcionário!");
        }
        echo('<br><br><a href="index.html">Voltar</a>');
    }
    $banco = null;

?>