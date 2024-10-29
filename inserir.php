<?php 
require 'conexao.php'; // Chama arquivo de conexão

// Captura e sanitização dos dados do formulário
$nomeMedicamento = filter_input(INPUT_POST, 'nomeMedicamento', FILTER_SANITIZE_STRING);
$QTDmedicamento = filter_input(INPUT_POST, 'QTDmedicamento', FILTER_VALIDATE_INT); // Alterado para o nome correto
$precound = filter_input(INPUT_POST, 'precound', FILTER_VALIDATE_FLOAT);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
$validade = filter_input(INPUT_POST, 'validade', FILTER_SANITIZE_SPECIAL_CHARS);

try {
    // Preparação da consulta SQL
    $sql = $pdo->prepare("INSERT INTO medicamentos (nomeMedicamento, QTDMedicamento, precound, validade, categoria) 
                          VALUES (:nomeMedicamento, :QTDMedicamento, :precound, :validade, :categoria)");
    
    // Vinculação de valores
    $sql->bindValue(':nomeMedicamento', $nomeMedicamento);
    $sql->bindValue(':QTDMedicamento', $QTDmedicamento);  // Nome correto do campo
    $sql->bindValue(':precound', $precound);
    $sql->bindValue(':categoria', $categoria);
    $sql->bindValue(':validade', $validade);
    
    // Execução da consulta
    if ($sql->execute()) {
        header("Location:index.php");
        exit; // Adiciona exit após redirecionar
    } else {
        echo "Erro ao inserir os dados. Tente novamente.";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
