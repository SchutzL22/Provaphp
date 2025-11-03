<?php
require_once 'Usuario.php';

echo "<h1>Exibição (mostraUsuario.php)</h1>";

$usuario = new Usuario("Ana Carolina", "123.456.789-00", "Rua das Gaivotas, 789");

echo "<p><strong>Nome:</strong> " . $usuario->nome . "</p>";
echo "<p><strong>CPF:</strong> " . $usuario->cpf . "</p>";
echo "<p><strong>Endereço:</strong> " . $usuario->getEndereco() . "</p>";
?>