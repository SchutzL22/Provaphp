<?php
// Expira o cookie de autenticação definindo sua validade no passado
setcookie('autenticado', '', time() - 3600);
header('Location: Exercicio8_2login.php');
exit;
?>