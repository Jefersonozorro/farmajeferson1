<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando Medicamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Editando Medicamento</h1>
        <?php 
            require 'conexao.php';
            $id = $_REQUEST["id"];
            $dados = []; // criando variavel vetor
            $sql = $pdo->prepare("SELECT * FROM medicamentos WHERE id = :id");
            $sql->bindValue(":id", $id);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                $dados = $sql->fetch(PDO::FETCH_ASSOC);
            } else {
                header("Location:index.php");
                exit;
            }     
        ?>
        <form action="editando.php" method="POST">
            <input type="hidden" name="id" id="id" value="<?= $dados['id']; ?>">
            <div class="mb-3">
                <label for="NomedoMedicamento" class="form-label">Nome do Medicamento</label>
                <input type="text" name="nome_medicamento" id="NomedoMedicamento" class="form-control" value="<?= $dados['nomeMedicamento']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="QTDMedicamento" class="form-label">Quantidade do Medicamento</label>
                <input type="number" name="quantidade_medicamento" id="QTDMedicamento" class="form-control" value="<?= $dados['QTDMedicamento']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="precound" class="form-label">Preço do Medicamento</label>
                <input type="number" name="preco_unitario" id="precound" class="form-control" value="<?= $dados['precound']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="categoria" class="form-label">Categoria do Medicamento</label>
                <input type="text" name="categoria" id="categoria" class="form-control" value="<?= $dados['categoria']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="validade" class="form-label">Validade do Medicamento</label>
                <input type="date" name="validade" id="validade" class="form-control" value="<?= $dados['validade']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@