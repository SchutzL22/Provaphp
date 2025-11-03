<?php
// $variavelGlobal é definida fora de qualquer função, portanto, é GLOBAL.
$variavelGlobal = 100;

function exibirVariavelGlobal() {
    // Para usar uma variável global DENTRO de uma função, usamos a palavra-chave 'global'.
    global $variavelGlobal; 
    
    echo "Variável Global dentro da função: " . $variavelGlobal;
}

// Chamando a função que exibe a variável global
exibirVariavelGlobal(); 

echo "<br>";

// A variável global também pode ser acessada diretamente fora da função.
echo "Variável Global fora da função: " . $variavelGlobal;
?>