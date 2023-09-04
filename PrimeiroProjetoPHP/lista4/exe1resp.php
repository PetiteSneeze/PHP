<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <!-- Inclua a referência ao CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Resultado</h1>
        <?php
        if (isset($_POST['data'])) {
            $data = $_POST['data'];

            if (validateDate($data, 'Y-m-d')) {
                $dataObj = new DateTime($data);
                $diaDaSemana = $dataObj->format('l');

                echo "<p class='alert alert-success'>A data '$data' é válida e corresponde a um(a) $diaDaSemana.</p>";
            } else {
                echo "<p class='alert alert-danger'>A data '$data' não é válida.</p>";
            }
        }
        
        // Função para validar uma data
        function validateDate($date, $format = 'Y-m-d') {
            $d = DateTime::createFromFormat($format, $date);
            return $d && $d->format($format) === $date;
        }
        ?>
    </div>
    <!-- Inclua a referência ao JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
