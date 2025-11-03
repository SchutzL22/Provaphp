<?php
// Uma função recursiva é uma função que chama a si mesma.
function calcularFatorial($n) {
    // Caso base: a condição de parada para evitar um loop infinito.
    // Fatorial de 0 ou 1 é sempre 1.
    if ($n <= 1) {
        return 1; 
    } else {
        // Chamada recursiva: n multiplicado pelo fatorial de (n-1)
        // Ex: 5 * fatorial(4) -> 4 * fatorial(3) -> 3 * fatorial(2) ...
        return $n * calcularFatorial($n - 1);
    }
}

$num = 5;
$resultado = calcularFatorial($num);

echo "O fatorial de $num é $resultado"; // Saída: O fatorial de 5 é 120
?>