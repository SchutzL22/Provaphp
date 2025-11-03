<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if (empty($nome) || empty($email)) {
        header("Location: Exercicio3_3falha.php");
        exit;
    } else {
        header("Location: Exercicio3_3sucesso.php");
        exit;
    }
} else {
    header("Location: Exercicio3_3agradecimento.php");
    exit;
}
?>