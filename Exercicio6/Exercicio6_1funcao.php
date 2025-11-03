<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Exemplo de Funções (Mesma Página)</title>
</head>
<body>
    <h1>Calculadora de Soma</h1>
    <form method="POST" action="">
        <label for="numero1">Número 1:</label>
        <input type="text" name="numero1" id="numero1"><br><br>

        <label for="numero2">Número 2:</label>
        <input type="text" name="numero2" id="numero2"><br><br>

        <input type="submit" name="enviar" value="Calcular Soma">
    </form>

    <?php
    // Função que calcula a soma de dois números
    function somar($num1, $num2) {
        $soma = $num1 + $num2;
        return $soma;
    }

    // Verifica se o formulário foi enviado
    if (isset($_POST['enviar'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        // Chamando a função somar e guardando o retorno na variável 'resultado'
        $resultado = somar($numero1, $numero2);

        echo "<p>A soma de $numero1 e $numero2 é igual a: <strong>$resultado</strong></p>";
    }
    ?>
</body>
</html>