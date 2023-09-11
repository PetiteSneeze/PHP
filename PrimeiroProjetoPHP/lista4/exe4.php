<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Divisores</title>
    <!-- Adicione o link para o Bootstrap CSS (min version) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo personalizado para a página */
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Soma de Divisores</h1>
        <form action="exe4resp.php" method="POST">
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <div class="form-group">
                    <label for="numero<?= $i ?>">Número <?= $i ?>:</label>
                    <input type="number" class="form-control" id="numero<?= $i ?>" name="numeros[]" required>
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
    <!-- Adicione o link para o Bootstrap JS (min version) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
