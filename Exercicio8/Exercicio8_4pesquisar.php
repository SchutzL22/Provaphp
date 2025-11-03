<?php
    include("Exercicio8_4conexaoBD.php");

    $pesquisar = $_POST['pesquisar'];
    $sql = "SELECT * FROM funcionario WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_funcionario = mysqli_query($conexao, $sql);

    while($rows_funcionario = mysqli_fetch_array($resultado_funcionario)){
        echo "Nome: ".$rows_funcionario['nome']."<br>";
        echo "CPF: ".$rows_funcionario['cpf']."<br>";
        echo "Endereço: ".$rows_funcionario['endereco']."<br>";
        echo "<hr>";
    }
    echo '<br><a href="Exercicio8_4pesquisar.html">Nova Pesquisa</a>';
    echo '<br><a href="Exercicio8_4inicio.php">Página inicial</a>';
?>