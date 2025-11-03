<?php
include("Exercicio7_1conexao.php");

// Verifica se um arquivo foi enviado
if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];

    // Pega informações do arquivo
    $nomeArquivo = $arquivo['name'];
    $caminhoTemporario = $arquivo['tmp_name'];
    $erro = $arquivo['error'];

    // Se não houver erro no upload
    if ($erro === 0) {
        $destino = $nomeArquivo;
        
        // Tenta mover o arquivo para a pasta 'uploads'
        if (move_uploaded_file($caminhoTemporario, $destino)) {
            // Insere o caminho do arquivo no banco de dados
            $sql = "INSERT INTO imagens (caminho_arquivo) VALUES ('$destino')";
            
            if (mysqli_query($conexao, $sql)) {
                echo "<h1>Upload realizado com sucesso!</h1>";
            } else {
                echo "Erro ao salvar no banco de dados: " . mysqli_error($conexao);
            }
        } else {
            echo "<h1>Falha ao mover o arquivo para a pasta de uploads.</h1>";
        }
    } else {
        echo "<h1>Ocorreu um erro durante o upload!</h1>";
    }
} else {
    echo "<h1>Nenhum arquivo foi enviado.</h1>";
}

mysqli_close($conexao);
echo '<br><a href="Exercicio7_1index.html">Voltar</a>';
?>