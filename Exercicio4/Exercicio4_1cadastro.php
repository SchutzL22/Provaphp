<?php
// Conexão com o Banco de Dados (Host, Usuario, Senha, Banco de Dados)
$conexao = mysqli_connect("localhost", "root", "", "aula_php");

// Verifica se a conexão foi bem-sucedida
if (!$conexao) {
    // A função die() encerra o script e exibe a mensagem.
    die("Erro de conexão com o Banco de Dados: " . mysqli_connect_error());
}

// Verifica se os campos do formulário foram enviados via POST
if (isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['cidade'])) {
    
    // Obtém os valores do formulário HTML
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];

    // Cria a consulta SQL para inserir dados na tabela "alunos"
    $sql = "INSERT INTO alunos (nome, endereco, cidade) VALUES ('$nome', '$endereco', '$cidade')";

    // Executa a consulta SQL no banco de dados
    if (mysqli_query($conexao, $sql)) {
        echo "<h1>Dados inseridos com sucesso!</h1>";
    } else {
        echo "<h1>Erro ao inserir dados: " . mysqli_error($conexao) . "</h1>";
    }

} else {
    // Se os campos não foram enviados, exibe uma mensagem de erro
    echo "<h1>Erro: Todos os campos são obrigatórios.</h1>";
}

// Fecha a conexão com o banco de dados para liberar recursos
mysqli_close($conexao);
?>