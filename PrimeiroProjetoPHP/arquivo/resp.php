<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Formulário</title>
    <!-- Adicione o link para o Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Resultado do Formulário</h1>
        <div class="card">
            <div class="card-body">
                <?php
                $texto = fopen("arquivonome.txt", "w") or die("Erro");
                for($i=1; $i<=5; $i++){
                    fwrite($texto, $_POST["alunos$i"]."\n");
                }
                fclose($texto);
                echo '<h4 class="card-title">Conteúdo gravado com sucesso:</h4>';
                echo '<pre class="card-text">';
                readfile("arquivonome.txt");
                echo '</pre>';
                ?>
            </div>
        </div>
    </div>
    <!-- Adicione o link para o Bootstrap JS (opcional, dependendo dos recursos que você precisa) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
