<?php
// Verifica se o usuário está autenticado pelo cookie
if (!isset($_COOKIE['autenticado']) || $_COOKIE['autenticado'] !== 'true') {
    header('Location: Exercicio8_2login.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Conteúdo Restrito</title>
</head>
<body>
    <h1>Conteúdo Restrito</h1>
    <p>Este é um conteúdo acessível apenas para usuários autenticados.</p>
    <p><a href="Exercicio8_2logout.php">Sair</a></p>
</body>
</html>