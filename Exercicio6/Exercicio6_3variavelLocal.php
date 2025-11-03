<?php
function calcularSoma($numero1, $numero2) {
    // $soma é uma variável LOCAL. Ela só existe e funciona dentro desta função.
    $soma = $numero1 + $numero2; 
    return $soma;
}

$valor1 = 10;
$valor2 = 5;

// Chamando a função e guardando seu retorno em $resultado
$resultado = calcularSoma($valor1, $valor2);

echo "A soma é: " . $resultado; // A variável $resultado é acessível aqui.

// A linha abaixo causaria um ERRO, pois $soma não é acessível fora da função.
// echo "A soma é: " . $soma; 
?>