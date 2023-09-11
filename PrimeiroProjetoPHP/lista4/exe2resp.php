<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos em Ordem Alfabética</title>
    <!-- Adicione o link para o Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
        <h1 class="mb-4">Alunos em Ordem Alfabética</h1>

        <?php
        if ($_POST['alunos']) {
            $alunos = $_POST['alunos'];

            sort($alunos);

            echo "<ul class='list-group'>";
            foreach ($alunos as $aluno) {
                echo "<li class='list-group-item'>$aluno</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Nenhum aluno foi enviado.</p>";
        }
        ?>

       
    </div>
    <!-- Adicione o link para o Bootstrap JS e jQuery (opcional, necessário para alguns recursos do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
