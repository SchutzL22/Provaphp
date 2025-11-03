<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Imagens Enviadas</title>
</head>
<body>
    <h1>Galeria de Imagens</h1>
    <?php
        include("Exercicio7_1conexao.php");
        
        $sql = "SELECT * FROM imagens ORDER BY id DESC";
        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            while($row = mysqli_fetch_assoc($resultado)){
                echo "<div>";
                echo "<p>Imagem ID: " . $row['id'] . "</p>";
                // Exibe a imagem usando o caminho salvo no banco
                echo "<img src='" . $row['caminho_arquivo'] . "' alt='Imagem' width='300px'>";
                echo "<hr>";
                echo "</div>";
            }
        } else {
            echo "<p>Nenhuma imagem foi enviada ainda.</p>";
        }
        mysqli_close($conexao);
    ?>
    <br>
    <a href="Exercicio7_1index.html">Voltar</a>
</body>
</html>