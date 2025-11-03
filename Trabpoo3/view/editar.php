<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        h1 { color: #ffc107; }
        form { max-width: 600px; background: #fff8e1; padding: 20px; border-radius: 8px; }
        label { display: block; margin-top: 15px; font-weight: bold; }
        input, textarea { width: 100%; padding: 10px; margin-top: 5px; box-sizing: border-box; }
        button { margin-top: 20px; padding: 10px 20px; background: #ffc107; color: #000; border: none; cursor: pointer; }
    </style>
</head>
<body>

<h1>✏️ Editar Produto</h1>

<form method="POST">
    <input type="hidden" name="id" value="<?= $this->produto->id ?>">

    <label>Nome:</label>
    <input type="text" name="nome" value="<?= htmlspecialchars($this->produto->nome) ?>" required>

    <label>Descrição:</label>
    <textarea name="descricao" rows="4"><?= htmlspecialchars($this->produto->descricao) ?></textarea>

    <label>Preço (R$):</label>
    <input type="number" name="preco" step="0.01" min="0" 
           value="<?= $this->produto->preco ?>" required>

    <button type="submit">Atualizar Produto</button>
    <a href="index.php">← Voltar</a>
</form>

<?php if (isset($erro)): ?>
    <p style="color:red; margin-top:15px;"><?= $erro ?></p>
<?php endif; ?>

</body>
</html>