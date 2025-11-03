<?php
require_once 'Usuario.php';

echo "<h1>Exibição (acessaUsuario.php)</h1>";

class AcessaUsuario {

    public function imprimeUsuario() {
        
        $usuario = new Usuario("Carlos Eduardo", "111.222.333-44", "Avenida Central, 1000");

        echo "<p><strong>Nome (via AcessaUsuario):</strong> " . $usuario->nome . "</p>";
        echo "<p><strong>CPF (via AcessaUsuario):</strong> " . $usuario->cpf . "</p>";
        echo "<p><strong>Endereço (via AcessaUsuario):</strong> " . $usuario->getEndereco() . "</p>";
    }
}

$acesso = new AcessaUsuario();
$acesso->imprimeUsuario();
?>