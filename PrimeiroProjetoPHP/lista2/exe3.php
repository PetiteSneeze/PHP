<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Escreva um programa para calcular a soma dos dois valores de entrada. Se os dois valores forem
    iguais, retorne o triplo da soma. -->

    <title>Exercicio 3 lista 2</title>
  </head>
  <body class="container">
     
    <form action="exe3resp.php" method="POST">
        <div clas="row">
            <div class="col">
            <label for="numero1" class="form-label">Informe o primeiro número: </label>
                <input type="number" name="numero1" id="numero1" class="form-control">
            </div>
        </div>
        <div clas="row">
            <div class="col">
            <label for="numero2" class="form-label">Informe o segundo número: </label>
                <input type="number" name="numero2" id="numero2" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col">
            <button type="submit" class="btn btn-warning" style="margin-top: 30px;">Calcular</button>
            </div>

        </div>
    
    </form>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>