<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Resultado da Soma</title>
</head>
<body>
    <h1>Resultado da Soma</h1>
    <?php
    // Incluindo o arquivo que contém a função que queremos usar
    include "Exercicio6_2funcoes.php";

    // Verifica se os valores foram enviados pelo formulário
    if (isset($_POST['enviar'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        // Chamando a função somar que está no outro arquivo
        $resultado = somar($numero1, $numero2);

        echo "A soma de $numero1 e $numero2 é igual a: <strong>$resultado</strong>";
    } else {
        echo "Por favor, preencha o formulário e envie os valores.";
    }
    ?>
    <br><br>
    <a href="Exercicio6_2formulario.html">Voltar</a>
</body>
</html>