testeVeiculos.php
<?php
$resultado = "";

if ($_POST) {
    require_once 'Carro.php';
    require_once 'Moto.php';
    require_once 'Caminhao.php';

    $tipo = $_POST['tipo'] ?? '';
    $marca = $_POST['marca'] ?? 'Marca Padrão';
    $modelo = $_POST['modelo'] ?? 'Modelo Padrão';
    $veiculo = null;

    switch ($tipo) {
        case 'carro':
            $portas = (int)($_POST['portas'] ?? 4);
            $veiculo = new Carro($marca, $modelo, $portas);
            break;
        case 'moto':
            $cilindradas = (int)($_POST['cilindradas'] ?? 150);
            $veiculo = new Moto($marca, $modelo, $cilindradas);
            break;
        case 'caminhao':
            $carga = (float)($_POST['carga'] ?? 10);
            $veiculo = new Caminhao($marca, $modelo, $carga);
            break;
        default:
            $resultado = "<p>Tipo de veículo inválido.</p>";
    }

    if ($veiculo) {
        $resultado = $veiculo->info();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Veículos</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 30px; }
        .container { max-width: 600px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #333; }
        form { margin-bottom: 20px; padding-bottom: 20px; border-bottom: 1px solid #eee; }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input[type="text"], input[type="number"], select { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background-color: #007BFF; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; margin-top: 20px; }
        button:hover { background-color: #0056b3; }
        .resultado { background: #e7f3ff; border-left: 5px solid #007BFF; padding: 15px; margin-top: 20px; }
        .resultado strong { font-size: 1.2em; color: #0056b3; }
    </style>
    <script>
        function atualizarCampos() {
            var tipo = document.getElementById('tipo').value;
            document.getElementById('campoPortas').style.display = (tipo === 'carro') ? 'block' : 'none';
            document.getElementById('campoCilindradas').style.display = (tipo === 'moto') ? 'block' : 'none';
            document.getElementById('campoCarga').style.display = (tipo === 'caminhao') ? 'block' : 'none';
        }
        window.onload = atualizarCampos;
    </script>
</head>
<body>

<div class="container">
    <h1>🚛 Cadastro de Veículos</h1>
    
    <form action="testeVeiculos.php" method="POST">
        <label for="tipo">Tipo de Veículo:</label>
        <select id="tipo" name="tipo" onchange="atualizarCampos()" required>
            <option value="carro" <?= (($_POST['tipo'] ?? 'carro') == 'carro') ? 'selected' : ''; ?>>Carro</option>
            <option value="moto" <?= (($_POST['tipo'] ?? '') == 'moto') ? 'selected' : ''; ?>>Moto</option>
            <option value="caminhao" <?= (($_POST['tipo'] ?? '') == 'caminhao') ? 'selected' : ''; ?>>Caminhão</option>
        </select>

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" value="<?= htmlspecialchars($_POST['marca'] ?? 'Fiat') ?>" required>

        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="<?= htmlspecialchars($_POST['modelo'] ?? 'Uno') ?>" required>

        <div id="campoPortas">
            <label for="portas">Número de Portas:</label>
            <input type="number" id="portas" name="portas" value="<?= htmlspecialchars($_POST['portas'] ?? 4) ?>" min="2">
        </div>

        <div id="campoCilindradas">
            <label for="cilindradas">Cilindradas (CC):</label>
            <input type="number" id="cilindradas" name="cilindradas" value="<?= htmlspecialchars($_POST['cilindradas'] ?? 150) ?>" min="50">
        </div>
        
        <div id="campoCarga">
            <label for="carga">Capacidade de Carga (Ton):</label>
            <input type="number" id="carga" name="carga" value="<?= htmlspecialchars($_POST['carga'] ?? 10) ?>" min="1" step="0.5">
        </div>

        <button type="submit">Criar Veículo e Ver Info</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado">
            <p><strong>Resultado (Polimorfismo em ação):</strong></p>
            <p>O método <code>info()</code> retornou:</p>
            <p><strong><?= htmlspecialchars($resultado) ?></strong></p>
        </div>
    <?php endif; ?>

</div>

</body>
</html>