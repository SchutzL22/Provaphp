<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Dados Recebidos</title>
</head>
<body>
    <h1>Dados Recebidos:</h1>
    <?php
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];

        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Endereço:</strong> $endereco</p>";
        echo "<p><strong>Cidade:</strong> $cidade</p>";
    ?>
</body>
</html>