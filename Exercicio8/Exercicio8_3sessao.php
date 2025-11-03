<?php
// Inicia ou recupera uma sessão. Deve estar no início do documento.
session_start();

// Define variáveis de sessão
$_SESSION['nome'] = "Aluno";
$_SESSION['sobrenome'] = "Dois";
$_SESSION['data'] = date('d/m/Y', time());

// Exibe uma mensagem e o link para a próxima página
echo "<h2>As variáveis de sessão foram definidas.</h2>";
echo "<a href='Exercicio8_3mostra_sessao.php'>Ver Dados da Sessão</a>";
?>