<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "escola"; // Usando o mesmo banco de dados 'escola'

    $conexao = mysqli_connect($servidor, $usuario, $senha, $db);

    if(!$conexao){
        die("Houve um erro na conexão: " . mysqli_connect_error());
    }
?>