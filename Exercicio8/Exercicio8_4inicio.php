<?php
include('Exercicio8_4protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="text-center mt-3">
    <h2 class="shadow-sm p-3 mb-3 bg-white rounded">Bem-vindo ao Painel, <?php echo $_SESSION['nome']; ?></h2>
    <div class="container col-12">
        <div class="row">
            <div class="col-3"><h2><a href="Exercicio8_4cadastro.html" class="btn btn-primary">Cadastrar Funcionario</a></h2></div>
            <div class="col-3"><h2><a href="Exercicio8_4pesquisar.html" class="btn btn-primary">Pesquisar Funcionario</a></h2></div>
            <div class="col-3"><h2><a href="Exercicio8_4select.php" class="btn btn-primary">Funcionarios Cadastrados</a></h2></div>
            <div class="col-3"><h2><a href="Exercicio8_4deletar.html" class="btn btn-primary">Deletar Funcionario</a></h2></div>
        </div>
        <div class="row mt-3">
             <div class="col-12"><a href="Exercicio8_4logout.php" class="btn btn-danger">Sair</a></div>
        </div>
    </div>
</body>
</html>