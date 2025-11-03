<?php
// Inicia ou recupera a sessão
session_start();

// Limpa todas as variáveis da sessão
$_SESSION = array();

// Destrói a sessão completamente
session_destroy();

echo "<h2>Sessão destruída com sucesso.</h2>";
echo "<p>Você será redirecionado...</p>";

// Redireciona o usuário de volta para a página inicial da sessão
header('Refresh: 2; URL=Exercicio8_3sessao.php');
?>