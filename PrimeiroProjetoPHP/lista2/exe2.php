<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Simples</title>
    <!-- Incluindo o Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Formulário Simples</h1>

        <form action="exer2resp.php" method="POST">
            <div class="row">
                <?php
                for ($i = 1; $i <= 7; $i++) {
                ?>
                <div class="col-md-6">
                    <label for="valor<?=$i?>" class="form-label">
                        Informe o <?=$i?>º valor
                    </label>
                    <input type="number" id="valor<?=$i?>" name="valor<?=$i?>" class="form-control">
                </div>
                <?php
                }
                ?>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-danger">OK</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Incluindo o Bootstrap JS (opcional, se necessário) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
