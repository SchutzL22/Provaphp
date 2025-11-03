<?php
include_once("Exercicio5_1conectar.php");

// Obtém o valor da cidade selecionada pelo usuário no formulário
$pesquisa = $_POST['cidade'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Resultado da Pesquisa</title>
</head>
<body>
    <h1>Resultado da Pesquisa por "<?php echo $pesquisa; ?>"</h1>
    <table border="1" style='width: 50%'>
        <tr>
            <th>NOME</th>
            <th>ENDEREÇO</th>
            <th>CIDADE</th>
        </tr>
        <?php
        // Realiza a busca na tabela "alunos" com base na cidade selecionada.
        $sql = "SELECT * FROM alunos WHERE cidade = '$pesquisa'";
        $resultado = mysqli_query($strcon, $sql);

        // Loop para exibir os resultados
        while ($registro = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $registro['nome'] . "</td>";
            echo "<td>" . $registro['endereco'] . "</td>";
            echo "<td>" . $registro['cidade'] . "</td>";
            echo "</tr>";
        }
        mysqli_close($strcon); // Fecha a conexão
        ?>
    </table>
    <br>
    <a href="Exercicio5_1pesquisa.html">Voltar</a>
</body>
</html>