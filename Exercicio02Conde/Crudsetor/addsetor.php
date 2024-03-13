<?php
    require_once("../BD/init.php");
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : null;
    $despesa = isset($_POST["despesa"]) ? $_POST : null;
    if(empty($nome)){
        echo "Preencha todos os campos!!!";
        exit;
    }
    $PDO = db_connect();
    $cod = "INSERT INTO Setor(nome, despesa) VALUES(:nome, :despesa)";
    $exe = $PDO->prepare($PDO);
    $exe->bindParam(":nome", $nome);
    $exe->bindParam(":despesa", $despesa);

    if($exe->execute()){
        header("Location: ../Index/index.html");
    }else{
        echo "Erro ao inserir";
        print_r($exe->erroInfo());
    }
?>