<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <title>Primeiro projeto php!</title>

</head>

<body>

    <main class="container-fluid">

        <h1>Olá mundo </h1>
        <div class="row">
            <div class="col">Coluna 1</div>
            <div class="col">Coluna 2</div>
            <div class="col">Coluna 3</div>
        </div>

        <div class="col-4">Coluna 1</div>
        <div class="col-4">Coluna 2</div>

        <i class="bi bi-earbuds"></i>

        <table class="table table-striped table-hover">

            <thead>
                <tr>
                    <th>Cabecalho 1</th>
                    <th>Cabecalho 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Valor 1</td>
                    <td>Valor 2</td>
                </tr>
                <tr>
                    <td>Valor 3</td>
                    <td>valor 4</td>
                </tr>
            </tbody>


        </table>

        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome:</label>
                <input type="text"class="form-control"id="nome" name="mome">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-danger">Calcular</button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-danger">Calcular</button>
            </div>

        </div>
    </main>

</body>

</html>