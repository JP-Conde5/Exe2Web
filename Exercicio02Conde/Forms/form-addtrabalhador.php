<?php
    require_once "Exercicio02Conde/BD/init.php";
    $PDO = db_connect();
    $cod = "SELECT id, nome FROM Setor ORDER BY nome";
    $exe = $PDO->prepare(cod);
    $exe->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Styles/style.css">
    <link rel="shortcut icon" href="./Assets/icon.png" type="image/x-icon">
    <script src="./Bootstrap/js/bootstrap.min.js"></script>
    <script src="./Bootstrap/js/popper.min.js"></script>
    <script src="./Bootstrap/js/jquery.min.js"></script>
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
    <div class="jumbotron">
        <div class="row">
            <div class="col-12">
                <h1>Cadastrar</h1>
            </div>
        </div>
        <form method="post" action="../Crudtrabalhador/addtrabalhador.php">
            <div class="form-group">
                <label for="Nome">Nome do Trabalhador</label>
                <input type="text" class="form-control" id="Nome" placeholder="João da Silva" required>
            </div>
            <div class="form-group">
                <label for="Idade">Idade</label>
                <input type="number" class="form-control" id="Idade" placeholder="8" required>
            </div>
            <select class="form-control">
                <?php while($nome = $stmt.fetch(PDO::FETCH_ASSOC)):?>
                    <option>Select padrão</option>
                <?php endwhile; ?>
            </select>
            <button type="submit" class="btn btn-outline-info">Enviar</button>
            <button type="submit" class="btn btn-outline-danger">Cancelar</button>
        </form>
    </div>
    </div>
</body>
</html>