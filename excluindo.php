<?php 
    require 'conexao.php'; // chama arquivo que cria a conexão
    $nomeMedicamento = $_POST['Nome do Medicamento'];
    $QTDMedicamento = $_POST['Quantidade do Medicamento'];
    $precound = $_POST['preço Unitario'];
    $categoria = $_POST['categoria do Medicamento'];
    $validade  = $_POST['Validade do Medicamento'];
    $id = $_POST['id'];

    $sql = $pdo->prepare("DELETE from medicamentos WHERE id = :id");
    $sql->bindValue(':id',$id);
   
    $sql->execute();
    
header("Location:  index.php");

?>