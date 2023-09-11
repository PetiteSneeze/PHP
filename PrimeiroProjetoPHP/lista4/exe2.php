<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <!-- Adicione o link para o Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Formulário de Alunos</h1>
        <form action="exe2resp.php" method="POST">
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <div class="form-group">
                    <label for="aluno<?= $i ?>">Aluno <?= $i ?>:</label>
                    <input type="text" class="form-control" id="aluno<?= $i ?>" name="alunos[]" required>
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <!-- Adicione o link para o Bootstrap JS e jQuery (opcional, necessário para alguns recursos do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
