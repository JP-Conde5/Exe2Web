<?php
    require_once '../init.php';
    $PDO = db_connect();
    $cod = "SELECT id, nome FROM Setor ORDER BY nome";
    $exe = $PDO->prepare($cod);
    $exe->execute();
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
            <div id="navbar"></div>
        </div>
        <div class="container-fluid py-4">
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Lista dos Setores Cadastrados</h1>
                    </div>
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Despesa</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($setor = $exe->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                            <td><?php echo $setor['id']?></td>
                            <td><?php echo $setor['nome']?></td>
                            <td><?php echo "R$" . $setor['despesa']?></td>
                            <td>
                                <a href="../Forms/form-editsetor?id="<?php echo $setor['id']?> class="btn btn-warning" role="button" aria-pressed="true">Enviar</a>
                                <a href="./deletesetor.php?id="<?php echo $setor['id']?> class="btn btn-danger" role="button" aria-pressed="true">Excluir</a>
                            </td>
                        </tr>
                        <?php endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>