<?php

echo "<h1>Resumo Completo da Aula 02</h1>";

// --- 1. Variáveis e Tipos de Dados ---
echo "<h2>1. Variáveis, Tipos de Dados e Operador Ternário</h2>";

// Tipos de Dados Primitivos
$nome = "Maria";       // String
$idade = 30;           // Inteiro (int)
$peso = 70.5;          // Ponto flutuante (float)
$temConta = true;      // Booleano (bool)

echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Peso: " . $peso . "<br>";

// Exemplo de Operador Ternário
echo "Tem conta? " . ($temConta ? "Sim" : "Não") . "<br>";

$status = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo "Status: " . $status . "<br>";

// Arrays Simples (vetores)
$cores = array("vermelho", "verde", "azul");
$numeros = [10, 20, 30, 40, 50];

echo "Cor na posição 1: " . $cores[1] . "<br>";    // Saída: verde
echo "Número na posição 0: " . $numeros[0] . "<br>"; // Saída: 10
echo "<hr>";


// --- 2. Operadores ---
echo "<h2>2. Operadores (Matemáticos, Relacionais, Lógicos)</h2>";

// --- Operadores Matemáticos ---
$a = 10;
$b = 5;

$soma = $a + $b;          // 15
$subtracao = $a - $b;     // 5
$multiplicacao = $a * $b; // 50
$divisao = $a / $b;       // 2
$modulo = $a % 3;         // 1 (resto da divisão)

echo "Soma: $soma <br>";
$a += $b; // Equivalente a $a = $a + $b;
echo "Valor de 'a' após atribuição com adição: $a <br><br>";

// --- Operadores Relacionais ---
$valor1 = 15;
$valor2 = 15;

if ($valor1 == $valor2) {
    echo "$valor1 é igual a $valor2 <br>";
}
if ($valor1 >= $valor2) {
    echo "$valor1 é maior ou igual a $valor2 <br><br>";
}

// --- Operadores Lógicos ---
$idade_op = 25;
$temPermissao = true;
$temConvite = false;

if ($idade_op >= 18 && $temPermissao) {
    echo "Pode entrar na festa! (AND) <br>";
}
if ($temPermissao || $temConvite) {
    echo "Pode entrar no evento. (OR) <br>";
}
if (!$temConvite) {
    echo "Não tem convite. (NOT) <br>";
}
echo "<hr>";


// --- 3. Estruturas Condicionais ---
echo "<h2>3. Estruturas Condicionais (If/Else e Switch)</h2>";

// --- Estrutura if, else if, else ---
$nota = 85;

if ($nota >= 90) {
    echo "Nota excelente!<br>";
} else if ($nota >= 70) {
    echo "Você foi bem na prova.<br>";
} else {
    echo "É uma boa ideia estudar mais.<br>";
}
echo "<br>";

// --- Estrutura Switch Case ---
$diaDaSemana = "quarta";

switch ($diaDaSemana) {
    case "segunda":
        echo "Hoje é segunda-feira.";
        break;
    case "terça":
        echo "Hoje é terça-feira.";
        break;
    case "quarta":
        echo "Hoje é quarta-feira.";
        break;
    default:
        echo "Dia inválido.";
}
echo "<br><br>";

// Switch Case para avaliar condições (intervalos)
$notaAluno = 85;
switch (true) {
    case ($notaAluno >= 90):
        echo "Nota A";
        break;
    case ($notaAluno >= 70):
        echo "Nota B";
        break;
    default:
        echo "Nota C";
}
echo "<hr>";


// --- 4. Arrays ---
echo "<h2>4. Arrays e Matrizes</h2>";

// --- Array Associativo ---
$pessoa = [
    "nome" => "Aluno",
    "idade" => 28,
    "instituicao" => "FMP"
];

echo "Nome original: " . $pessoa["nome"] . "<br>";
$pessoa["nome"] = "Roberto";
echo "Nome alterado: " . $pessoa["nome"] . "<br><br>";

// --- Percorrendo Arrays ---
$letras = ["A", "B", "C", "D", "F", "G"];

echo "Percorrendo com FOR: ";
for ($i = 0; $i < count($letras); $i++) {
    echo $letras[$i] . " ";
}
echo "<br>";

echo "Percorrendo com FOREACH: ";
foreach ($letras as $letra) {
    echo $letra . " ";
}
echo "<br><br>";

// --- Matrizes (Array Multidimensional) ---
$matriz = [
    ["Python", "Java", "C++"],
    ["JavaScript", "Ruby", "PHP"],
    ["Swift", "Kotlin", "C#"]
];

echo "Elemento [1][2]: " . $matriz[1][2] . "<br>"; // Saída: PHP

echo "Percorrendo a matriz:<br>";
for ($linha = 0; $linha < count($matriz); $linha++) {
    for ($coluna = 0; $coluna < count($matriz[$linha]); $coluna++) {
        echo $matriz[$linha][$coluna] . " ";
    }
    echo "<br>";
}

?>