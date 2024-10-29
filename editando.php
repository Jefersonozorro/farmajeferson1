<?php 
    require 'conexao.php'; // chama arquivo que cria a 
    $nomeMedicamento = $_POST['Nome do Medicamento'];
    $QTDMedicamento = $_POST['Quantidade do Medicamento'];
    $precound = $_POST['preço Unitario'];
    $categoria = $_POST['categoria do Medicamento'];
    $validade  = $_POST['Validade do Medicamento'];
    $id = $_POST['id'];
    
    $sql = $pdo->prepare("UPDATE medicamentos SET nomeMedicamento = :Nome do Medicamento, QTDMedicamento = :Quantidade do Medicamento, precound =:preço Unitario,  categoria =:categoria do Medicamento, validade =:Validade do Medicamento, validade=:Validade do Medicamento WHERE id = $id");
    $sql->bindValue(':Nome do Medicamento',$nomeMedicamento);
    $sql->bindValue(':Quantidade do Medicamento',$QTDMedicamento);
    $sql->bindValue(':preço Unitario',$precound);
    $sql->bindValue(':categoria do Medicamento',$categoria);
    $sql->bindValue(':Validade do Medicamento',$validade);
    // escrevendo na tabela
    $sql->execute();
    
header("Location:index.php");

?>