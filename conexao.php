<?php 

try {
    // Criando a conexão com tratamento de exceção
    $pdo = new PDO("mysql:dbname=farmacia;host=localhost:3306", "root", "cimatec");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Modo de erro para exceções

   

    // Executando a consulta
    $sql = $pdo->query('SELECT * FROM usuario');

    // Verificando se há resultados
    if ($sql->rowCount() > 0) {
        // Obtendo os dados
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);

        // Exibindo os dados
        echo '<pre>';
        print_r($dados);
        echo '</pre>';
    } else {
        
    }

} catch (PDOException $e) {
    // Tratamento de erro de conexão ou consulta
    echo "Erro: " . $e->getMessage();
}

?>
