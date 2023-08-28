<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <!-- Adicione os links para os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Resultados</h1>
        <div class="card mt-3">
            <div class="card-body">
                <?php
                // Inicialize arrays para armazenar os dados dos alunos
                $nomes = array();
                $notas = array();

                // Coleta os dados dos alunos do formulário
                for ($i = 1; $i <= 10; $i++) {
                    $nome = $_POST["nome$i"];
                    $nota = floatval($_POST["nota$i"]);

                    $nomes[] = $nome;
                    $notas[] = $nota;
                }

                $media = array_sum($notas) / count($notas);

                // Encontra o aluno com a maior nota
                $indiceMelhorAluno = array_search(max($notas), $notas);
                $melhorAluno = $nomes[$indiceMelhorAluno];
                ?>

                <p class="mb-0">Média da Classe: <?php echo number_format($media, 2); ?></p>
                <p class="mb-0">Aluno com a Maior Nota: <?php echo $melhorAluno; ?></p>
            </div>
        </div>
    </div>

    <!-- Adicione os scripts do Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
