<?php
session_start();
include 'conexao.php'; // Arquivo de conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = trim($_POST['login']);
    $senha = $_POST['senha'];

    // Validação de entrada
    if (empty($login) || empty($senha)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    // Consulta ao banco de dados
    $sql = "SELECT * FROM usuario WHERE login = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verificação da senha
        if (password_verify($senha, $user['senha'])) {
            $_SESSION['login'] = $user['login'];
            header("Location: bemvindo.php");
            exit; // Adicione exit após redirecionar
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}
?>