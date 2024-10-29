<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Medicamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Cadastro do Medicamento</h1>
        <form action="inserir.php" method="post">
            <div class="mb-3">
                <label for="nomeMedicamento" class="form-label">Nome do Medicamento</label>
                <input type="text" name="nomeMedicamento" id="nomeMedicamento" class="form-control" placeholder="Nome do Medicamento" required aria-describedby="nomeMedicamentoHelp">
                <div id="nomeMedicamentoHelp" class="form-text">Digite o nome completo do medicamento.</div>
            </div>
            <div class="mb-3">
                <label for="qtdMedicamento" class="form-label">Quantidade do Medicamento</label>
                <input type="number" name="QTDmedicamento" id="qtdMedicamento" class="form-control" placeholder="Quantidade do Medicamento" required min="1" aria-describedby="qtdMedicamentoHelp">
                <div id="qtdMedicamentoHelp" class="form-text">Digite a quantidade disponível em estoque.</div>
            </div>
            <div class="mb-3">
                <label for="precoUnitario" class="form-label">Preço Unitário</label>
                <input type="number" name="precound" id="precoUnitario" class="form-control" placeholder="Preço Unitário" required min="0.01" step="0.01" aria-describedby="precoUnitarioHelp">
                <div id="precoUnitarioHelp" class="form-text">Digite o preço por unidade (use ponto para separar os centavos).</div>
            </div>
            <div class="mb-3">
                <label for="categoriaSelect" class="form-label">Categoria</label>
                <select name="categoria" id="categoriaSelect" class="form-select" required aria-describedby="categoriaHelp">
                    <option value="" disabled selected>Selecione...</option>
                    <option value="ANALGÉSICOS">ANALGÉSICOS</option>
                    <option value="ANTI-INFLAMATÓRIOS">ANTI-INFLAMATÓRIOS</option>
                    <option value="ANTIBIÓTICOS">ANTIBIÓTICOS</option>
                    <option value="ANTIVIRAIS">ANTIVIRAIS</option>
                    <option value="ANTIFÚNGICOS">ANTIFÚNGICOS</option>
                    <option value="ANTIDEPRESSIVOS">ANTIDEPRESSIVOS</option>
                    <option value="ANSIOLÍTICOS">ANSIOLÍTICOS</option>
                    <option value="ANTIPSICÓTICOS">ANTIPSICÓTICOS</option>
                    <option value="ANTIHISTAMÍNICOS">ANTIHISTAMÍNICOS</option>
                    <option value="ANTIHIPERTENSIVOS">ANTIHIPERTENSIVOS</option>
                    <option value="DIURÉTICOS">DIURÉTICOS</option>
                    <option value="IMUNOSSUPRESSORES">IMUNOSSUPRESSORES</option>
                    <option value="OUTROS">OUTROS</option>
                </select>
                <div id="categoriaHelp" class="form-text">Selecione a categoria do medicamento.</div>
            </div>
            <div class="mb-3">
                <label for="validade" class="form-label">Validade do Medicamento</label>
                <input type="date" name="validade" id="validade" class="form-control" required aria-describedby="validadeHelp">
                <div id="validadeHelp" class="form-text">Informe a data de validade do medicamento.</div>
            </div>
            <div class="d-flex justify-content-between">
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

