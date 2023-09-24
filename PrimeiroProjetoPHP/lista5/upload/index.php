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
        <form method="POST" enctype="multipart/form-data" action="envio.php">
            <div class="row">
                <div class="col">
                    <label for="arquivo" class="form-label">
                        Selecione o arquivo:
                    </label>
                    <input type="file" class="form-control" name="arquivo"
                    id="arquivo"/>
                </div>
            </div>
                

           
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <!-- Adicione o link para o Bootstrap JS (opcional, dependendo dos recursos que você precisa) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
