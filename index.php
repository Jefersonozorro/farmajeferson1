<?php 
require 'conexao.php';
$sql = $pdo->query("SELECT * FROM medicamentos");
$lista = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE FARMACIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Sistema de Funcionários</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Medicamento</th>
                    <th>Quantidade</th>
                    <th>Preço por Unidade</th>
                    <th>Categoria</th>
                    <th>Data de Validade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $a): ?>
                    <tr>
                        <td><?= $a['id']; ?></td>  
                        <td><?= $a['nomeMedicamento']; ?></td>
                        <td><?= $a['QTDMedicamento']; ?></td>
                        <td><?= $a['precound']; ?></td>
                        <td><?= $a['categoria']; ?></td>
                        <td><?= $a['validade']; ?></td>
                        <td>
                            <a href="editar.php?id=<?= $a['id']; ?>" class="btn btn-warning btn-sm">[Editar]</a>
                            <a href="excluir.php?id=<?= $a['id']; ?>" class="btn btn-danger btn-sm">[Excluir]</a>
                        </td>                
                    </tr>                
                <?php endforeach; ?>    
            </tbody>
        </table>
        <a href="cadastrar.php" class="btn btn-primary">Cadastrar Medicamento</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>