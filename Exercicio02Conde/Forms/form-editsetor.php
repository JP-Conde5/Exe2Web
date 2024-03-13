<?php 
    require "../BD/init.php";
    $id = isset($_GET["id"]) ? $_GET["id"] : null;
    if (empty($id)){
        echo "ID para alteração não definido";
        exit;
    }
    $PDO = db_connect();
    $cod = "SELECT id, nome FROM Setor WHERE id=:id";
    $exe = $PDO->prepare($cod);
    $exe->bindParam(":id", $id, PDO::PARAM_INT);
    $exe->execute();
?>