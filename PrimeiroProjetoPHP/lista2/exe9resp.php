<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Resultados</h2>
                    </div>
                    <div class="card-body">
                        <?php
                       
                        $anoNascimento = $_POST['ano_nascimento'];
                        $anoAtual = date("Y");
                        $idade = $anoAtual - $anoNascimento;
                        $diasVividos = $idade * 365; 
                        $idade2025 = 2025 - $anoNascimento;
                        ?>

                        <p class="mb-2">Idade: <?php echo $idade; ?> anos</p>
                        <p class="mb-2">Dias vividos: <?php echo $diasVividos; ?> dias</p>
                        <p>Idade em 2025: <?php echo $idade2025; ?> anos</p>
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
