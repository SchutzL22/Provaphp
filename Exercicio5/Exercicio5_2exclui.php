<?php
// Inclui o arquivo de conexão
include_once("Exercicio5_2conectar.php");

// Obtém o nome enviado pelo formulário
$nome = $_POST['nome'];

// Cria a consulta SQL para excluir o registro
$sql = "DELETE FROM alunos WHERE nome = '$nome'";

// Executa a consulta
$resultado = mysqli_query($strcon, $sql);

// Verifica se a exclusão foi bem-sucedida
if (mysqli_affected_rows($strcon) > 0) {
    echo "Exclusão realizada com sucesso!";
} else {
    echo "Nenhum registro foi excluído. Verifique se o nome está correto.";
}

// Fecha a conexão com o banco de dados
mysqli_close($strcon);

echo '<br><br><a href="Exercicio5_2pesquisaexclui.php">Voltar</a>';
?>