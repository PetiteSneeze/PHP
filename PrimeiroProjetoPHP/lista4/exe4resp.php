<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Soma de Divisores</title>
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
        <h1 class="mb-4">Resultado - Soma de Divisores</h1>

        <?php
        if ($_POST['numeros']) {
            $numeros = $_POST['numeros'];

            function somaDivisores($numero) {
                $soma = 0;
                for ($i = 1; $i <= $numero / 2; $i++) {
                    if ($numero % $i == 0) {
                        $soma += $i;
                    }
                }
                return $soma;
            }

            foreach ($numeros as $index => $numero) {
                $soma = somaDivisores($numero);
                echo "<p>Soma dos divisores de $numero: $soma</p>";
            }
        } else {
            echo "<p>Nenhum número foi enviado.</p>";
        }
        ?>

      
    </div>
    <!-- Adicione o link para o Bootstrap JS (min version) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
