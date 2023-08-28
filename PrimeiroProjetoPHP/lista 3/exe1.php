<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alunos</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Registro de Alunos</h1>
        <form method="post" action="exe1resp.php">
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="mb-0">Aluno <?php echo $i; ?></h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nome<?php echo $i; ?>">Nome:</label>
                            <input type="text" class="form-control" id="nome<?php echo $i; ?>" name="nome<?php echo $i; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nota<?php echo $i; ?>">Nota:</label>
                            <input type="number" class="form-control" id="nota<?php echo $i; ?>" name="nota<?php echo $i; ?>" required>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary mt-3">Registrar</button>
        </form>
    </div>

    <!-- Adicione os scripts do Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
