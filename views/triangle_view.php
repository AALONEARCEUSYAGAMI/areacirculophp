<!-- view/triangle_view.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Área de Triángulo</title>
    <style>
        /* Estilos CSS para el formulario y la presentación de resultados */
    </style>
</head>
<body>
    <h2>Calculadora de Área de Triángulo</h2>

    <?php if (isset($_GET['result'])): ?>
        <div class="result">
            <?php echo "El área del triángulo es: " . htmlspecialchars($_GET['result']); ?>
        </div>
    <?php else: ?>
        <form method="post" action="index.php">
      
            <label for="base">Base:</label>
            <input type="number" step="any" name="base" value="<?= $base ?>" required>

            <label for="height">Altura:</label>
            <input type="number" step="any" name="height" value="<?= $height ?>" required>

            <button type="submit">Calcular Área</button>
        </form>
    <?php endif; ?>
</body>
</html>
