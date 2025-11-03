<?php
include("Exercicio4_2conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$matricula = $_POST['matricula'];
$ano = $_POST['ano'];
$turma = $_POST['turma'];
// md5() é um método antigo e inseguro. O ideal hoje é usar password_hash().
$senha = md5($_POST['senha']);

$sql = "INSERT INTO cadastro(nome, email, matricula, ano, turma, senha) 
        VALUES ('$nome', '$email', '$matricula', '$ano', '$turma', '$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "Usuário cadastrado com sucesso";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>