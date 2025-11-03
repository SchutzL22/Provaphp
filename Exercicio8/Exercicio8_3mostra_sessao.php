<?php
// Inicia ou recupera a sessão para poder ler as variáveis
session_start();

echo "<h2>Dados de Sessão:</h2>";

// Exibe os valores das variáveis de sessão
echo "Nome: " . $_SESSION['nome'] . "<br>";
echo "Sobrenome: " . $_SESSION['sobrenome'] . "<br>";
echo "Data: " . $_SESSION['data'] . "<br>";

// Cria um link para a página que destrói a sessão
echo "<br><a href='Exercicio8_3destroi_sessao.php'>Sair (Destruir Sessão)</a>";
?>