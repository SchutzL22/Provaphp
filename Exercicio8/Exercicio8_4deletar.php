<?php
    include("Exercicio8_4conexaoBD.php");

    $excluir = $_POST['excluir'];
    $sql = "DELETE FROM funcionario WHERE cpf='$excluir'";

    if(mysqli_query($conexao, $sql)){
        echo "<h1>Cadastro excluído com sucesso!</h1>";
    } else {
        echo "<h1>Não foi possível excluir: ".mysqli_error($conexao)."</h1>";
    }
    mysqli_close($conexao);
    echo '<br><a href="Exercicio8_4deletar.html">Excluir outro</a>';
    echo '<br><a href="Exercicio8_4inicio.php">Página inicial</a>';
?>