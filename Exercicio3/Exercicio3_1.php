<?php
    // Captura os valores dos campos de entrada, se existirem
    $num01 = filter_input(INPUT_POST, "txtNumero1");
    $num02 = filter_input(INPUT_POST, "txtNumero2");
    
    // Calcula a soma dos dois números capturados
    $resul = $num01 + $num02;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Exercício 1: Soma</title>
</head>
<body>
    <h1>Calculadora de Soma</h1>
    
    <form method="post">
        <label>Número 1: <input type="text" name="txtNumero1" /></label><br><br>
        <label>Número 2: <input type="text" name="txtNumero2" /></label><br><br>
        <input type="submit" value="Calcular">
    </form>
    
    <h1>Resultado</h1>
    <h1><?php echo $resul; ?></h1>
</body>
</html>