<?php
    require_once '../BD/init.php';
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
    $despesa = isset($_POST['despesa']) ? $_POST['despesa'] : null;
    if(empty($nome) || empty($despesa)){
        echo "Volte e preencha todos os campos";
        exit;
    }
    $PDO = db_connect();
    $cod = "UPDATE Setor SET nome = :nome, despesa = :despesa where id = :id";
    $exe = PDO->prepare(cod);
    $exe->bindParam(":nome", $nome);
    $exe->bindParam(":despesa", $despesa);
    $exe->bindParam(":id", $id);
    if($exe->execute()){
        header('Location: ../Index/index.html');
    }else{
        echo "Erro ao alterar";
        print_r($exe->errorInfo());
    }
?>