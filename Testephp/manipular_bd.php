<?php
// Inclui o arquivo de conexão
include 'conexao.php';

// CSS (para quando este arquivo é chamado diretamente ou via include)
echo '<link rel="stylesheet" href="style.css">';

// --- 4.a) Inserção de Dados ---
// Verifica se a variável 'acao' foi enviada via POST e se é 'inserir'
if (isset($_POST['acao']) && $_POST['acao'] == 'inserir') {
    $jogador = $_POST['jogador'];
    $posicao = $_POST['posicao'];
    $numero_camisa = (int)$_POST['numero_camisa'];
    $idade = (int)$_POST['idade'];

    $sql_insert = "INSERT INTO escalacao (Jogador, Posicao, Numero_Camisa, Idade) VALUES (?, ?, ?, ?)";
    
    // Prepara e executa a query para evitar SQL Injection
    $stmt = $conexao->prepare($sql_insert);
    $stmt->bind_param("ssii", $jogador, $posicao, $numero_camisa, $idade);
    
    if (!$stmt->execute()) {
        echo "<p>Erro ao inserir jogador: " . $stmt->error . "</p>";
    }
    // Limpa o statement
    $stmt->close();
}

// --- 4.c) Exclusão de Jogador ---
// Verifica se a variável 'acao' foi enviada via GET e se é 'excluir'
if (isset($_GET['acao']) && $_GET['acao'] == 'excluir') {
    $jogador_para_excluir = $_GET['jogador'];

    // CUIDADO: Conforme o requisito, a exclusão é pelo NOME.
    // Isso excluirá TODOS os jogadores com esse nome.
    $sql_delete = "DELETE FROM escalacao WHERE Jogador = ?";
    
    $stmt = $conexao->prepare($sql_delete);
    $stmt->bind_param("s", $jogador_para_excluir);
    
    if (!$stmt->execute()) {
        echo "<p>Erro ao excluir jogador: " . $stmt->error . "</p>";
    } else {
        // Redireciona de volta para o index.html para limpar os parâmetros GET da URL
        // e mostrar a lista atualizada.
        header("Location: index.html");
        exit(); // Garante que o script pare após o redirecionamento
    }
    $stmt->close();
}

// --- 4.b) Listagem de Escalacão ---
echo "<h2>Jogadores Escalados</h2>";
$sql_select = "SELECT ID, Jogador, Posicao, Numero_Camisa, Idade FROM escalacao";
$resultado = $conexao->query($sql_select);

if ($resultado->num_rows > 0) {
    echo "<table>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Jogador</th>";
    echo "<th>Posição</th>";
    echo "<th>Nº Camisa</th>";
    echo "<th>Idade</th>";
    echo "<th>Ação</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    // Loop para exibir cada linha
    while($linha = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $linha["ID"] . "</td>";
        echo "<td>" . htmlspecialchars($linha["Jogador"]) . "</td>";
        echo "<td>" . htmlspecialchars($linha["Posicao"]) . "</td>";
        echo "<td>" . $linha["Numero_Camisa"] . "</td>";
        echo "<td>" . $linha["Idade"] . "</td>";
        // Link de exclusão (usa o nome, conforme solicitado)
        echo "<td><a class='link-excluir' href='manipular_bd.php?acao=excluir&jogador=" . urlencode($linha["Jogador"]) . "' onclick='return confirm(\"Tem certeza que deseja excluir " . htmlspecialchars($linha["Jogador"]) . "?\");'>Excluir</a></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    
    // --- 5. Cálculo da Quantidade Total de Jogadores ---
    $total_jogadores = $resultado->num_rows; // O número de linhas do resultado é o total
    
    echo "<tfoot>";
    echo "<tr>";
    echo "<td colspan='5'><strong>Total de Jogadores Cadastrados:</strong></td>";
    echo "<td><strong>" . $total_jogadores . "</strong></td>";
    echo "</tr>";
    echo "</tfoot>";
    
    echo "</table>";
} else {
    echo "<p>Nenhum jogador escalado ainda.</p>";
}

// Fecha a conexão com o banco
$conexao->close();
?>