<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "aula_php";

// Cria a conexão
$strcon = mysqli_connect($servername, $username, $password, $database);

// Verifica a conexão
if (!$strcon) {
    die("Falha na Conexão: " . mysqli_connect_error());
}
// echo "Sucesso na Conexão"; // Comentado para não poluir a tela de resultados
?>