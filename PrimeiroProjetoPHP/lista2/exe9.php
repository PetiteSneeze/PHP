<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Idade</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Calculadora de Idade</h2>
                    </div>
                    <div class="card-body">
                        <form action="exe9resp.php" method="POST">
                            <div class="form-group">
                                <label for="ano_nascimento">Ano de Nascimento:</label>
                                <input type="number" class="form-control" id="ano_nascimento" name="ano_nascimento" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Calcular</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Adicione os scripts do Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
