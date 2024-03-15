<?php
    require_once '../BD/functions.php';
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    if(empty($id)){
        echo "ID não informado";
        exit;
    }
    $PDO = db_connect();
    $cod = "DELETE FROM $tipos WHERE id = :id";
    $exe = $PDO->prepare($cod);
    $exe->bindParam(":id", $id, PDO::PARAM_INT); 
?>