<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Funcionarios cadastrados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php 
        include("conexao.php");
        
        $sql="SELECT * FROM funcionario";
        $resultado=mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado)>0){
            echo "<table class='table'>
                  <tr>
                  <th>CPF</th>
                  <th>Nome</th>
                  <th>Endereço</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>Telefone</th>
                  <th>Formação</th>
                  <th>Nivel Escolar</th></tr>";
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
            echo "</table>";
        }
        else{
            echo "Zero Resultado";
        }
        mysqli_close($conexao);
    ?>
</body>
</html>