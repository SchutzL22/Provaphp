<?php
// Define o nome e o valor do cookie
$nome_cookie = "usuario";
$valor_cookie = "Aluno";

// Cria o cookie com validade de 1 hora (3600 segundos)
setcookie($nome_cookie, $valor_cookie, time() + 3600);
?>
<html>
<body>
<?php
// Verifica se o cookie "usuario" já foi atribuído
if (!isset($_COOKIE[$nome_cookie])) {
    echo "Cookie '" . $nome_cookie . "' não estava atribuído!";
    echo "<br>Atualize a página para ver o valor do cookie.";
} else {
    echo "Cookie '" . $nome_cookie . "' está atribuído!<br>";
    echo "Valor: " . $_COOKIE[$nome_cookie];
}
?>
</body>
</html>