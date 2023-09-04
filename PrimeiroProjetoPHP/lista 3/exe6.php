<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada de Produtos</title>
    <!-- Inclua a referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Entrada de Produtos</h1>
        <form action="exe6resp.php" method="post">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo '<div class="mb-3">
                        <label for="produto' . $i . '">Nome do Produto ' . $i . ':</label>
                        <input type="text" class="form-control" id="produto' . $i . '" name="produtos[]" required>
                      </div>';
                echo '<div class="mb-3">
                        <label for="preco' . $i . '">Preço do Produto ' . $i . ':</label>
                        <input type="number" class="form-control" id="preco' . $i . '" name="precos[]" step="0.01" required>
                      </div>';
            }
            ?>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
    <!-- Inclua a referência ao JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
