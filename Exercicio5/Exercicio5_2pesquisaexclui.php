<?php
include_once("Exercicio5_2conectar.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Listar e Excluir Alunos</title>
</head>
<body>
    <h1>Lista de Alunos Cadastrados</h1>
    <table border="1" style='width: 50%'>
        <tr>
            <th>NOME</th>
            <th>ENDEREÇO</th>
            <th>CIDADE</th>
        </tr>
        <?php
        $sql = "SELECT * FROM alunos";
        $resultado = mysqli_query($strcon, $sql);

        while ($registro = mysqli_fetch_array($resultado)) {
            echo "<tr>";
            echo "<td>" . $registro['nome'] . "</td>";
            echo "<td>" . $registro['endereco'] . "</td>";
            echo "<td>" . $registro['cidade'] . "</td>";
            echo "</tr>";
        }
        // A conexão não é fechada aqui para ser usada pelo formulário se necessário,
        // mas será fechada no script de exclusão.
        ?>
    </table>
    <hr>
    <h2>Excluir Aluno</h2>
    <form name="exclui" action="Exercicio5_2exclui.php" method="post">
        <p>Digite o nome do aluno que deseja excluir:</p>
        <input type="text" name="nome" required /></p>
        <input type="submit" name="botao" value="Excluir"/>
    </form>
</body>
</html>