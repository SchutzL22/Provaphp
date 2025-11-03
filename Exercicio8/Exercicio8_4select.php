<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Funcionarios cadastrados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-3">Funcionários Cadastrados</h1>
        <?php 
            include("Exercicio8_4conexaoBD.php");
            
            $sql="SELECT * FROM funcionario";
            $resultado=mysqli_query($conexao, $sql);

            if(mysqli_num_rows($resultado)>0){
                echo "<table class='table table-bordered table-striped'>
                      <thead class='thead-dark'><tr>
                      <th>CPF</th><th>Nome</th><th>Endereço</th><th>Cidade</th><th>Estado</th>
                      <th>Telefone</th><th>Formação</th><th>Nivel Escolar</th>
                      </tr></thead><tbody>";
                while($row=mysqli_fetch_assoc($resultado)){
                    echo "<tr><td>".$row['cpf']."</td>";
                    echo "<td>".$row['nome']."</td>";
                    echo "<td>".$row['endereco']."</td>";
                    echo "<td>".$row['cidade']."</td>";
                    echo "<td>".$row['estado']."</td>";
                    echo "<td>".$row['telefone']."</td>";
                    echo "<td>".$row['formacao']."</td>";
                    echo "<td>".$row['nivelEscolar']."</td></tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "Nenhum funcionário cadastrado.";
            }
            mysqli_close($conexao);
        ?>
        <a href="Exercicio8_4inicio.php" class="btn btn-primary mt-3">Página inicial</a>
    </div>
</body>
</html>