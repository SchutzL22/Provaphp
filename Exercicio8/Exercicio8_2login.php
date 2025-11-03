<?php
// Verifica se o formulário foi enviado
if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Lógica de autenticação SIMPLES (NÃO USE EM PRODUÇÃO!)
    if ($usuario == 'usuario' && $senha == 'senha123') {
        // Autenticação OK, cria um cookie para durar 1 hora
        setcookie('autenticado', 'true', time() + 3600);
        header('Location: Exercicio8_2conteudo_restrito.php');
        exit;
    } else {
        $mensagem_erro = "Credenciais inválidas. Tente novamente.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página de Login (Cookies)</title>
</head>
<body>
    <h1>Página de Login</h1>
    <?php if (isset($mensagem_erro)) { echo "<p style='color:red;'>$mensagem_erro</p>"; } ?>
    <form method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario"><br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha"><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>