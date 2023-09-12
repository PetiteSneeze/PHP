<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alunos</title>
    <!-- Adicione o link para o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Formulário de Alunos</h1>
        <form action="resp.php" method="POST">
            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <div class="form-group">
                    <label for="aluno<?= $i ?>">Aluno <?= $i ?>:</label>
                    <input type="text" class="form-control" id="aluno<?= $i ?>" name="alunos<?= $i ?>" required>
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <!-- Adicione o link para o Bootstrap JS (opcional, dependendo dos recursos que você precisa) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
