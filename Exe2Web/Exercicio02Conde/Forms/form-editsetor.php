<?php 
    require_once "../BD/init.php";
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
    $setor = $exe->fetch(PDO::FETCH_ASSOC);
    if(!is_array($setor)){
        echo "Nenhum cadastro encontrado";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Styles/style.css">
    <link rel="shortcut icon" href="../Assets/icon.png" type="image/x-icon">
    <script src="../Bootstrap/js/jquery.min.js"></script>
    <script src="../Bootstrap/js/popper.min.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
    <title>High Vision</title>
    <script type="text/javascript">
        $(document).ready(function(){
            $(function(){
                $("#navbar").load("../navbar.html")
            })
        })
    </script>
</head>

<body>
    <div class="container-fluid">
        <nav id="navbar"></nav>
    </div>
    <div class="container-fluid py-4">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-12">
                    <h1>Alterar Dados do Setor</h1>
                </div>
            </div>
            <form action="./Crudsetor/editsetor.php" method="post">
                <div class="form-group">
                    <label for="Nome">Nome do Setor</label>
                    <input name="nome" type="text" class="form-control" id="Nome" placeholder="Nome" required>
                </div>
                <div class="form-group">
                    <label for="Despesa">Despesa</label>
                    <input name="despesa" type="text" class="form-control" id="Despesa" placeholder="R$" required>
                </div>
                <button type="submit" class="btn btn-outline-info">Enviar</button>
                <button type="submit" class="btn btn-outline-danger">Cancelar</button>
            </form>
        </div>
    </div>
</body>

</html>